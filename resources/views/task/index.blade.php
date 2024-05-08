<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de tareas</title>
    <style>
        :root {
            color-scheme: light dark;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        body {
            color: light-dark(black, white);
            background-color: light-dark(#0693e3, #000E16);
            display: grid;
            place-content: center;
        }

        img {
            margin-block: 10px;
        }

        .create {
            display: grid;
            place-content: center;
            margin: 20px;
            gap: 10px;
        }

        table {
            display: grid;
            place-content: center;
            gap: 10px;
            margin-top: 10px;

        }

        table caption {
            background-color: #0693e3;
        }

        .table_titles {
            display: flex;
            justify-content: space-between;
            gap: 50px;
        }

        .tasks {
            background-color: greenyellow;
            color: black;
            display: grid;
            gap: 10px;
        }
    </style>
</head>

<body>
    <img width="339" height="64" src="https://acertemos.com/wp-content/uploads/2022/04/logo_nuevo.png" class="elementor-animation-pulse attachment-full size-full" alt="" srcset="https://acertemos.com/wp-content/uploads/2022/04/logo_nuevo.png 339w, https://acertemos.com/wp-content/uploads/2022/04/logo_nuevo-300x57.png 300w" sizes="(max-width: 339px) 100vw, 339px">
    <form action="{{url('/')}}" method="post" class="create">
        @csrf
        <label>
            Título
            <input type="text" name="title" id="title">
        </label>
        <label>
            Descripción
            <input type="text" name="description" id="description">
        </label>
        <label>
            Fecha de vencimiento
            <input type="text" name="expiration" id="expiration">
        </label>

        <button>Guardar tarea</button>
    </form>

    <table>
        <caption>Gestor de tareas</caption>
        <thead>
            <tr class="table_titles">
                <th scope="col">Título</th>
                <th scope="col">Descripción</th>
                <th scope="col">Estado</th>
                <th scope="col">Vencimiento</th>
            </tr>
        <tbody class="tasks">
            @foreach($tasks as $task)
            <tr>
                <th scope="row">{{$task->title}}</th>
                <td>{{$task->description}}</td>
                <td>{{$task->status}}</td>
                <td>{{$task->expiration}}</td>
                <td>
                    <form class="remove" action="{{route('task.destroy', $task->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>❌</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </thead>
    </table>
</body>

</html>