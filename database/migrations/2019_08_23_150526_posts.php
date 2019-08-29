<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) { //Cette commande crée une table(un tableau) quand je fais la commande php artisan migrate dans le terminal.

            $table->increments('id'); //crée la colonne "id" dans le tableau. Cette donnée va s'incrémenter

            $table->string('title');//Crée une colonne pour un petit champ de texte (grâce à la fct "string"), cette colonne s'appelle "title"

            $table->text('body');//Crée une colonne pour un plus grand champ de texte, pour mettre mon contenu du post, cette colonne s'appelle "body"

            $table->timestamps();//Crée 2 colonnes: une avec la date de création du post et une avec la date de la dernière modification du post.

    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
