<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chat</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <style>
            .list-group{
                overflow-y: scroll;
                height: 250px;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row" id="app">
                <div class="col-md-4 col-md-offset-4">
                    <a href="#" class="list-group-item active">
                    Chat Room
                    </a>
                    <div class="list-group" v-chat-scroll>

                        <message v-for="value in chat.message" :key=value.index color="warning">
                            @{{ value }}
                        </message>

                    </div>
                    <input type="text" class="form-control" placeholder="type your message............" @keyup.enter='sendMessage' v-model="message" >



            </div>
        </div>
    </div>

        <script src="{{ asset('js/app.js') }}" ></script>
        <script>
        // new Vue({
        //     el: '#app',
        //     data:{
        //         message:''
        //     },
        //     methods:{
        //         send(){
        //             console.log(this.message);
        //         }
        //     }
        // });

        </script>

    </body>
</html>
