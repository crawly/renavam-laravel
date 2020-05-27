# RenavamLaravel
Lib de validação de renavam no laravel

## Instalação
```
composer require crawly/renavam-laravel
```

## Exemplo de uso
```

    $request->validate([
        'renavam' => 'required|renavam',
    ]);
```