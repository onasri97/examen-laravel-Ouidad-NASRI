<!DOCTYPE html>

<style media="screen">

body{
  background-color: lightblue;
}
  h1,p{

    font-family: sans-serif;
  }
h1{
  text-align: center;
}
p{
  text-align:justify;
  max-width:1000px;
  margin:auto;
  padding-top: 50px;
  font-size: 20px;

}

span{
  font-weight: bold;
}

</style>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <h1> The title of the task : {{$task->title}}</h1>
  <p> <span>Description </span> : {{$task->description}}</p> </br>
  <p> <span> Date d'ajout</span> : ajouté le {{$task->created_at->locale('fr')->isoFormat('D MMMM YYYY')}}</p>

  </body>
</html>
