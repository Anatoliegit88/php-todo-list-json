<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>To Do List</title>
  

</head>
<body>
  <main>
    <div id="app">
      <div class="container">
        <div class="row">
          <div class="col-7">
            <ul class="list">
              <li class="list-item" v-for="todo in new_list">{{todo.text}} {{todo.done}} </li>
              <input type="text" v-model="new_to_do">
              <button @click="addTodo">Insert</button>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- <div id="app">
    <div class="container">
      <div class="row">
        <div class="col-5">
          <ul>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->


<script src="script.js"></script>
</body>
</html>