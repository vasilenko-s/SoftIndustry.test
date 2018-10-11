<div class="container">
    <!-- Example row of columns -->
    <div class="row">

        <div class="col-md-9">

            {{--<pre>--}}
            {{--{{ print_r(Session::all()) }}--}}
            {{--</pre>--}}

             {{--вывод ошибок валидации--}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }}</li>
                        @endforeach
                    </ul>


                </div>
            @endif

            {{--вывод статуса--}}
            @if (Session::get('status'))
                <div class="alert alert-success">
                           {{ Session::get('status') }}
                </div>
            @endif


            {{--форма создания сотрудника--}}
            <form method="post" action="">
                {{  csrf_field()  }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Введите имя сотрудника">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" value="" placeholder="Введите фамилию сотрудника">
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form__input" id="photo" name="photo"  value='image/jpeg,image/png'>
                </div>

                <li class="form__item">
                    <label class='form__inline-label' for="avatar">Аватар:</label>
                    <input class='form__inline-input' id='avatar' name='avatar' type="file" value='image/jpeg,image/png'>
                </li>


                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
         </div>
    </div>


</div>