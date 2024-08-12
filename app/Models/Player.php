<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;    

class Player extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'kill', 'death', 'assist', 'round'];

    // Caminho do arquivo
    protected static function getFilePath()
    {
        return storage_path('app/data/users.php');
    }

    // Obtém todos os usuários
    public static function all($columns = ['*'])
    {

        $filePath = self::getFilePath();
        if (File::exists($filePath)) {
            $data = include $filePath;
            return collect($data)->map(function ($item) {
                return new static($item);
            });
        }
        return collect([]);
    }
    
    // Encontrar um usuário por ID
    public static function find($id)
    {
        $filePath = self::getFilePath();
        if (File::exists($filePath)) {
            $data = include $filePath;
            $item = collect($data)->firstWhere('id', $id);
            return $item ? new static($item) : null;
        }
        return null;
    }

}
