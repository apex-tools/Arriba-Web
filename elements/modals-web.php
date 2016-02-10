<!-- * Created by PhpStorm.-->
<!-- * User: Дракон-->
<!-- * Date: 10.02.2016-->
<!-- * Time: 14:14-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog case-modal" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				<button type="button" class="btn btn-primary">Сохранить</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->

<!-- Заказ с сайта -->
<div class="modal fade" id="request" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Отправьте свои данные</h4>
            </div>
            <form method="post"  id="request" action="mail.php">
            <div class="modal-body">
                <input type="hidden" name="title" id="title" value="Заказ со страницы веб-разработка"/>
                <span class="clearfix">Ваше имя</span>
                <input type="text" placeholder="Ваше имя" name="user" id="user" class="col-xs-12"/>
                <div class="clearfix"><br/></div>
                <span class="clearfix">Ваш телефон</span>
                <input type="text" placeholder="Ваш телефон" name="phone" id="phone" class="col-xs-12"/>
                <div class="clearfix"><br/></div>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Отправить" class="btn btn-primary submit"/>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Заказ с сайта -->