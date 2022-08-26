<!DOCTYPE html>
<html>
    <head>
        <link href="./styles/sheet.css" rel="stylesheet">

        <script>
            class Item {
                itemName;
                itemCartCount;
                itemLSCounter;

                constructor(name){
                    this.itemName = name;
                    this.itemLSCounter = name + "Counter";
                }

                printInfo(){
                    console.log("itemName: " + this.itemName);
                    console.log("itemLSCounter: " + this.itemLSCounter);
                }

                addToCartFC(){
                    if (localStorage.getItem(this.itemLSCounter) == undefined) {
                        localStorage.setItem(this.itemLSCounter, 0);
                    }

                    localStorage.setItem(this.itemLSCounter, Number(localStorage.getItem(this.itemLSCounter))+1);
                }
            }
             /*
            const pizzaItem = new Item("pizza");
            const cokeItem = new Item("coke");
            const spriteItem = new Item("sprite");
            */
            function clearElement(element_id){
                document.getElementById(element_id).innerHTML = "";
            }
            
            function renderCartExp(){
                
                console.log("renderCartExp() called");
                
                clearElement("cartDisplayElem");
                
                const array0 = [];
            
                for (let i = 0; i < localStorage.length; i++) {

                    if ((localStorage.key(i).slice(-7) == "Counter") && (localStorage.getItem(localStorage.key(i)) != 0)) {
                        array0.push([i, localStorage.key(i).slice(0, (localStorage.key(i).length - 7))])
                    }
                    
                }

                for (let i = 0; i < array0.length; i++) {
                    document.getElementById("cartDisplayElem").innerHTML += `<p>Ammount of ${array0[i][1]}'s: ${localStorage.getItem(array0[i][1]+"Counter")}</p>`;
                }
                
                return array0;
            }

            function clearCart(){
                for (let i = 0; i < localStorage.length; i++) {

                    if ((localStorage.key(i).slice(-7) == "Counter") && (localStorage.getItem(localStorage.key(i)) != 0)) {
                        localStorage.setItem(localStorage.key(i), 0);
                    }

                }
            }
            
        </script>
        
    </head>
    <body>
        <br><br>
        <div id="main">
            <table>
                <tr>
                    <th>Items</th>
                    <th>Cart</th>
                </tr>
                <tr>
                    <td id="items_cell" style="width:300px;">
                    <?php 
        
                        $conn = mysqli_connect('localhost', 'root', 'sj6-fs&-xxfw', 'pizzaplace');

                        if (!$conn) {
                            die('Could not connect: ' . mysqli_error($con));
                        }

                        $sql = "SELECT * FROM pizzaplace.items";

                        $result = mysqli_query($conn, $sql);
                        
                        while ($row = mysqli_fetch_array($result)) {
                            echo $row['name'] . "<br>";
                            echo "<script>const " . $row['name'] . "Item = new Item(" . '"' . $row['name'] . '"' . ");</script>";
                            echo "<button onclick='" . $row['name'] . "Item.addToCartFC()'>Add to cart</button><br><br>";
                        }

                    ?>
                    </td>
                    <td id="cart_cell">
                        <button onclick="renderCartExp()">Render cart</button>

                        <button onclick="clearCart()">Clear cart</button>

                        <div id="cartDisplayElem">

                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>