select carts.order_id, SUM(carts.qnt) as total_qnt,  orders.name, orders.phone, orders.where
from laravel.carts
inner join orders on carts.order_id=orders.idorders
group by order_id order by sum(qnt) desc