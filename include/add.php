<div class="col-md-6">
    <form action="/admin?do=save" method="POST">
        <div class="card mt-4">
            <div class="card-header">
                <h2>Добавление заказа</h2>
            </div>
            <div class="card-body">
                <div class="form-control">
                    <div class="mt-2">
                        <label for="title" class="form-label">Название заказа</label>
                        <input type="text" id="title" name='title' class="form-control" required>
                        <label for="executor" class="form-label">Исполнитель</label>
                        <input type="text" id="executor" name='executor' class="form-control" required>
                        <label for="type" class="form-label">Тип</label>
                        <input type="text" id="type" name='type' class="form-control" required>
                        <label for="price" class="form-label">Цена</label>
                        <input type="text" id="price" name='price' class="form-control" required>
                        <label for="new" class="form-label">NEW/TOP(127/126)</label>
                        <input type="text" id="new" name='new' class="form-control" required>
                        <label for="url" class="form-label">Ссылка</label>
                        <input type="text" id="url" name='url' class="form-control" required>

                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body text-center">
                <button class="btn btn-success" type="submit">Сохранить</button>
            </div>
        </div>
    </form>
</div>
