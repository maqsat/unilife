<div class="table-responsive">
    <table id="demo-foo-addrow" class="display nowrap table table-hover" data-page-size="10">
        <thead>
        <tr>
            <th>ID #</th>
            <th>Статус</th>
            <th>Сумма</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Кэшбек</td>
            <td>{{ number_format(round(\App\Facades\Balance::getBalanceByStatus('cashback')), 0, '', ' ')  }}$</td>
            <td><a href="">Подробнее</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Матчинг бонус</td>
            <td>{{ number_format(round(\App\Facades\Balance::getBalanceByStatus('matching_bonus')), 0, '', ' ')  }}$</td>
            <td><a href="">Подробнее</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Бонус за бинар</td>
            <td>{{ number_format(round(\App\Facades\Balance::getBalanceByStatus('turnover_bonus')), 0, '', ' ')  }}$</td>
            <td><a href="">Подробнее</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Бонус признания</td>
            <td>{{ number_format(round(\App\Facades\Balance::getBalanceByStatus('status_bonus')), 0, '', ' ')  }}$</td>
            <td><a href="">Подробнее</a></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Реферальный бонус</td>
            <td>{{ number_format(round(\App\Facades\Balance::getBalanceByStatus('invite_bonus')), 0, '', ' ')  }}$</td>
            <td><a href="">Подробнее</a></td>
        </tr>
        </tbody>
    </table>
</div>
