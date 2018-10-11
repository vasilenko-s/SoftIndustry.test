<div class="wrapper">
    <main class="main-content">
        <div class="my-profile">
            <h2 class="heading">Мой профиль</h2>
            <div class="profile">
                <div class="avatar">
                    <img src="img/image.jpg" alt="Аватар" class="avatar__pic">
                </div>
                <div class="information">
                    <div class="nickname">Nickname</div>
                    <div class="user-name">
                        <span class="name">Имя</span>
                        <span class="surname">Фамилия</span>
                    </div>
                    <a href='tel:+11111111' class="phone">+1 111 11-11-11</a>
                </div>
            </div>
        </div>
        <div class='edit-profile'>
            <h2 class="heading">Редактировать профиль</h2>
            <form class='form' id='form' method='POST' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <ul class="form__list">
                    <li class="form__item">
                        <label class='form__label' for="nickname">Никнейм:</label>
                        <input class='form__input' id='nickname' name='nickname' type="text">
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="name">Имя:</label>
                        <input class='form__input' id='name' name='name' type="text">
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="surname">Фамилия:</label>
                        <input class='form__input' id='surname' name='surname' type="text">
                    </li>
                    <li class="form__item">
                        <label class='form__inline-label' for="avatar">Аватар:</label>
                        <input class='form__inline-input' id='avatar' name='avatar' type="file" value='image/jpeg,image/png'>
                    </li>
                    <li class="form__item">
                        <label class='form__label' for="phone">Телефон:</label>
                        <input class='form__input' id='phone' name='phone' type="text">
                    </li>
                    <li class="form__item">
                        <div class="form__title">Пол:</div>
                        <label class='form__inline-label' for="male">Мужской</label>
                        <input class='form__inline-input' name='sex' id='male' value='male' type="radio">
                        <label class='form__inline-label' for="female">Женский</label>
                        <input class='form__inline-input' name='sex' id='female' value='female' type="radio">
                    </li>
                    <li class="form__item">
                        <label class='form__inline-label' for="showPhone">Я согласен получать email-рассылку</label>
                        <input class='form__inline-input' name='showPhone' id='showPhone' type="checkbox">
                    </li>
                    <li class="form__item">
                        <button class='form__button' type="submit">Отправить</button>
                    </li>
                </ul>
            </form>
        </div>
    </main>
</div>