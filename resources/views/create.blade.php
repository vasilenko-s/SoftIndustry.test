<div class="container">
    <!-- Example row of columns -->
    <div class="row">

        <div class="col-md-9">


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

            {{--вывод статуса сохранения данных--}}
            @if (Session::get('status'))
                <div class="alert alert-success">
                           {{ Session::get('status') }}
                </div>
            @endif


            {{--форма создания сотрудника--}}
            <form name="myForm" method="post" action="" enctype='multipart/form-data'>
                {{  csrf_field()  }}

                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Введите имя сотрудника" required>
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form__inline-input" id="photo" name="photo"  value='image/jpeg,image/png'>
                </div>

                <div class="form-group">
                    <p>Характеристики сотрудника:</p>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="sociability" >Комуникабельность</label>
                            <select class="custom-select d-block w-100 " id="sociability" name="sociability">
                                <option value="">Выберите...</option>

                                @for($i=0; $i<=10; $i++)
                                    <option> {{ $i }}</option>
                                @endfor

                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="engineering">Инженерный навык</label>
                            <select class="custom-select d-block w-100" id="engineering" name="engineering">
                                <option value="">Выберите...</option>

                                @for($i=0; $i<=10; $i++)
                                    <option> {{ $i }}</option>
                                @endfor

                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="timemanagment" >Тайм менеджмент</label>
                            <select class="custom-select d-block w-100 " id="timemanagment" name="timemanagment"

                                    onChange="if(document.getElementById('timemanagment')[selectedIndex].value == 10){
                                        document.getElementById('project[]').setAttribute('multiple','')
                                    } else document.getElementById('project[]').removeAttribute('multiple','')" >

                                <option value="">Выберите...</option>)

                                @for($i=0; $i<=10; $i++)
                                    <option value="{{ $i }}"> {{ $i }}</option>
                                @endfor

                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="anguages">Знание языков</label>
                            <select class="custom-select d-block w-100" id="languages" name="languages">
                                <option value="">Выберите...</option>

                                @for($i=0; $i<=10; $i++)
                                <option> {{ $i }}</option>
                                @endfor

                            </select>
                        </div>
                </div>
            </div>

            <div class="form-group">
                <label for="project">Проект</label>
                <select class="custom-select d-block w-100 " id="project[]" name="project[]">
                    <option value="" disabled>Выберите...</option>

                    @foreach($projects as $project)
                        <option value="{{ $project->id }}"> {{ $project->name }} </option>
                    @endforeach

                </select>
            </div>


            <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
         </div>
    </div>


</div>

