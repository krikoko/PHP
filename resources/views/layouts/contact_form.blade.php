<div class="container">
        <h1 class="mb-2 text-left">Форма обратной связи</h1>
 
        @if(session('message'))
            <div class='alert alert-success'>
                {{ session('message') }}
            </div>
        @endif
 
        <div class="col-12 col-md-6">
            <form class="form-horizontal" method="POST" action="/contact">
                @csrf
                <div class="form-group">
                    <label for="Name">Имя: </label>
                    <input type="text" class="form-control" id="name" placeholder="Ваше имя" name="name" required>
                </div>
 
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
                </div>
 
                <div class="form-group">
                    <label for="message">Сообщение: </label>
                    <textarea type="text" class="form-control luna-message" id="message" placeholder="Текст письма" name="message" required></textarea>
                </div>
 
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Send">Отправить</button>
                </div>
            </form>
        </div>