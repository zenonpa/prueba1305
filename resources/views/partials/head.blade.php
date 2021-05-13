<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<style>
.blanco{ 
    padding: 0;
    border: none;
    background: none;
}
.animar1:hover {
    position: relative;
    animation-name: aniSearch;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: normal;
  }
  
  @keyframes aniSearch {
    0%   {left:0px; top:0px;}
    25%  {left:5px; top:0px;}
    50%  {left:5px; top:5px;}
    75%  {left:0px; top:5px;}
    100% {left:0px; top:0px;}
  }    
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>