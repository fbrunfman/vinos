<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Agregar Producto</title>
 </head>
 <body>
   <h1>Agregar producto</h1>
   <form class="" action="/products" method="post">
     {{ csrf_field() }}
     <div class="form-group">
            <label for="bodega">Cod. Producto
              <input type="text" name="bodega" value="">
            </label>
          </div>
     <div class="form-group">
       <label for="modelo">Nombre
         <input type="text" name="modelo" value="">
       </label>
     </div>   
     <div class="form-group">
        <label for="fecha">Nombre
          <input type="text" name="fecha" value="">
        </label>
      </div>   
    <button type="submit" name="agregar">Agregar</button>
     </div>
   </form>
   
   @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
   @endif
   
 </body>
</html>