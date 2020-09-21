<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

/*
			$table->integer('professor_id')->unsigned()->nullable();
			$table->foreign('professor_id')->references('id')->on('professors');
			$table->integer('administrador_id')->unsigned()->nullable();
			$table->foreign('administrador_id')->references('id')->on('administradors');*/

$factory->define(App\Apostila::class, function (Faker $faker) {
    $nomearq = $faker->lexify('??????.');
    $extensao = $faker->fileExtension;
    return [
        'data_envio' => ($faker->dateTimeBetween('-10 years', 'now'))->format('d/m/Y'),
        'disciplina' => $faker->lexify('Disciplina ?????'),
        'nome_arq' => $nomearq.$extensao
        /*'professor_id' => function(){
            return factory(App\Professor::class)->create()->id;
        }
        'administrador_id' => function(){
            return factory(App\Administrador::class)->create()->id;
        }*/
    ];
});
