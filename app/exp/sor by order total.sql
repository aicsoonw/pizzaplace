SELECT carts.order_id, /*carts.qnt, items.name, items.price, */ SUM(price * qnt) as total_price
FROM carts
INNER JOIN items on items.iditems=carts.item_id
/* group by order_id order by sum(price) desc */
/*order by order_id*/
group by order_id order by total_price desc