<!DOCTYPE html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');
    *{
        margin:0;
        padding:0;
        font-family: 'Ubuntu', sans-serif;
    }
    :root{
        --blue: #287bff;
        --white: #fff;
        --grey: #f5f5f5;
        --black1: #222;
        --black2: #999;
    }
    .navigation{
        position:fixed;
        bottom:0.00000001px;
        width: 300px;
        height: 100%;
        background: var(--black1);
        border-left: 10% solid var(--black1);
        transition: 0.5s;
        overflow: hidden;
    }

    /* How far navigation will collapse */
    .navigation.active{
        width: 70px;
    }

    .navigation ul{
        position: absolute;
        top:0;
        left:0;
        width:100%;
    }
    .navigation ul li{
        position: relative;
        width:100%;
        border-top-left-radius:30px;
        border-bottom-left-radius:30px;
        list-style: none;
    
    }
    /* highlights selected category */
    .navigation ul li:hover,
    .navigation ul li.hovered{
        background: var(--white);
    }
    /* highlights selected category */
    .navigation ul li:nth-child(1){
        margin-bottom:40px;
        pointer-events:none;
    }
    /* styles the link */
    .navigation ul li a{
        position:relative;
        display:block;
        width:100%;
        display: flex;
        text-decoration: none;
        color: var(--white);
    }
    .navigation ul li:hover a,
    .navigation ul li.hovered a{
        color:var(--black1);
    }
    .navigation ul li a .icon{
        position:relative;
        display:block;
        min-width:60px;
        height:60px;
        line-height: 60px;
        text-align: center;
    }
    .navigation ul li a .icon ion-icon{
        font-size: 1.75em; 
    }
    .navigation ul li a .title{
        position:relative;
        display: block;
        padding: 0 10px;
        height: 60px;
        line-height: 60px;
        text-align: start;
        white-space: nowrap;
    }
    /* Styling for nav bar curving outside */
    .navigation ul li:hover a::before,
    .navigation ul li.hovered a::before{
        content: ' ';
        position:absolute;
        right: 0;
        top: -50px;
        width: 50px;
        height: 50px;
        background: transparent;
        border-radius: 50%;
        box-shadow: 35px 35px 0 10px var(--white);
        pointer-events: none;
    }
    .navigation ul li:hover a::after,
    .navigation ul li.hovered a::after{
        content: ' ';
        position:absolute;
        right: 0;
        bottom: -50px;
        width: 50px;
        height: 50px;
        background: transparent;
        border-radius: 50%;
        box-shadow: 35px -35px 0 10px var(--white);
        pointer-events: none;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(odd){background: var(--black2);}

    th {
        background: var(--black1);
        color: white;
        border-radius:6px;
    }
    .table24{
        position:relative;
        left:340px;

    }
    .table24e{
        width:1100px;
    }
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: white;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: var(--black2);
        color:white;
    }
    .form1{
        color:white;
        position:relative;
    }
    .form{
        position:relative;
        left:339px;
        top:3px;
        width:500px;
        border-radius: 10px;
        background-color:black;
        padding: 20px;
    }
    #fname1{
        height:38px;
        border-radius:5px;
        }
    .cardbox{
        color:white;
        position: relative;
        bottom:730px;
        left:940px;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(5,1fr);
        grid-gap: 30px;
    }
    .cardbox .card{
        position: relative;
        width: 200px;
        background: var(--black1);
        padding: 30px;
        border-radius: 20px;
        display: flex;
        justify-content: space-between;
        cursor: pointer; 
        box-shadow: 0 7px 25px rgba(0,0,0,0.08);
    }
    .cardbox .card .numbers{
        position: relative;
        font-weight: 500;
        font-size: 2.5em;
        color: var(--black);
    }
    .cardbox .card .cardName{
        color: var(--black));
        font-size: 1.1em;
        margin-top: 5px;
    }
    .cardbox .card .iconBx{
        font-size: 3.5em;
        color: var(--black2);
    }
    .cardbox .card:hover{
        background: var(--black2);
    }
    .cardbox .card:hover .numbers,
    .cardbox .card:hover .cardName,
    .cardbox .card:hover .iconBx{
        color: var(--white);
    }
</style>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin Dashboard</title>
    </head>
    <body>
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="clipboard-outline"></ion-icon></span>
                        <span class="title">Sports4Us</span>
                     </a>
                </li>
                 <li> 
                    <a href="~">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="customers.blade.php">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="categories.blade.php">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title">Categories</span>
                    </a>
                </li>
                <li>
                    <a href="product.blade.php">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li>
                    <a href="~">
                        <span class="icon"><ion-icon name="chatbox-outline"></ion-icon></span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="~">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="~">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="~">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="form">
            <form class="form1" action="/action_page.php">
                <label for="fname">Parent Category</label>
                <select id="country" name="country">
                <option value="australia">Mens</option>
                <option value="canada">Women</option>
                <option value="usa">Accessories</option>
                </select>
                <label for="lname">Title</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Keywords</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Description</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Price</label><br>
                <input type="number" id="fname1" name="firstname"><br>
                <label for="lname">Quantity</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Details</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Image</label><br>
                <input type="file" id="fname" name="firstname"><br>
                <label for="lname">Status</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <input type="submit" value="Update Data">
            </form>
        </div>  
        <div class="cardbox">
            <div class="card">
                <div>
                    <div class="numbers">Return</div>
                    <div class="cardName">To: Accepted Orders</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="person-add-outline"></ion-icon>                            
                </div>
            </div>
        </div>
        <div class="cardbox">
            <div class="card">
                <div>
                    <div class="numbers">Return</div>
                    <div class="cardName">To: Shipping Orders</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="person-add-outline"></ion-icon>                            
                </div>
            </div>
        </div>
        <div class="cardbox">
            <div class="card">
                <div>
                    <div class="numbers">Return</div>
                    <div class="cardName">To: Orders</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="person-add-outline"></ion-icon>                            
                </div>
            </div>
        </div>
        <div class="cardbox">
            <div class="card">
                <div>
                    <div class="numbers">Return</div>
                    <div class="cardName">To: Categoriest</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="person-add-outline"></ion-icon>                            
                </div>
            </div>
        </div>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>        
    </body>
</html>