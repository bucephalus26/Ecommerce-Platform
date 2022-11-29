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
    body{
        min-height:100vh;
       
    }
    .container{
        position: relative;
        width: 100vh;
    }
    .navigation{
        position:fixed;
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
    .main{
        position:absolute;
        width: calc(100% - 300px);
        left: 300px;
        min-height: 100vh;
        background: var(--white);
        transition: 0.5s;
    }
    .main.active{
        width: calc(100% - 80px);
        left: 80px;
    }
    .topbar{
        width:100%;
        height: 60px;
        justify-content: space-between;
        align-items: center;
        padding: 0 10px;
    }
    .toggle{
        position: relative;
        width: 60px;
        height: 60px;
        display: flex;
        justify-content: center;
        align-items:center;
        font-size: 2.5em;
        cursor: pointer;      
    }
    .search{
        position: relative;
        left:330px;
        bottom:50px;
        margin: 0 10px;
    }
    .search label{
        position: relative;
        width: 100%;
    }
    .search label input{
        width: 100%;
        height:40px;
        border-radius: 40px;
        padding: 5px 20px;
        padding-left: 35px;
        outline: none;
        border: 1px solid var(--black2);
    }
    .search label ion-icon{
        position: absolute;
        top: 0;
        left: 10px;
        font-size: 1.2em;
    }
    .cardbox{
        position: relative;
        bottom: 40px;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(4,1fr);
        grid-gap: 30px;
    }
    .cardbox .card{
        position: relative;
        width: 200px;
        background: var(--white);
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
        color: var(--black2);
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
    table {
        position: relative;
        top:300px;
        left:93.5px;
        border-collapse: collapse;
        width: 1000px;
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
    .line{
        position: relative;
        bottom:30px;
        left:32.5px;
        width: 1100px;
    }
    .addtocat{
        position:relative;
        top:280px;
        left:93.5px;
        width:170px;
        height:50px;
        border-radius: 7px;
        background-color:black;
        color:white;
    }
    .addtocat:hover{
        background-color:white;
        color:black;
    }
</style>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin Dashboard</title>
    </head>
    <body>
        <div class="container">
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
                        <a href="~">
                            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                            <span class="title">Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="~">
                            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                            <span class="title">Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="~">
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
            <! ----- main ------>
            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="grid-outline"></ion-icon>
                    </div>
                    <! ----- search ------>
                    <div class="search">
                        <label>
                            <input type="text" placeholder="search here">
                            <ion-icon name="search-circle-outline"></ion-icon>
                        </label>
                    </div>
                    <div class="cardbox">
                        <div class="card">
                            <div>
                                <div class="numbers">364</div>
                                <div class="cardName">New Orders</div>
                            </div>
                            <div class="iconBx">
                                <ion-icon name="person-add-outline"></ion-icon>                            
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <div class="numbers">15</div>
                                <div class="cardName">Accepted Orders</div>
                            </div>
                            <div class="iconBx">
                                <ion-icon name="checkmark-done-circle-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <div class="numbers">14</div>
                                <div class="cardName">Shipping Orders</div>
                            </div>
                            <div class="iconBx">
                                <ion-icon name="boat-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <div class="numbers">152</div>
                                <div class="cardName">Completed Orders</div>
                            </div>
                            <div class="iconBx">
                                <ion-icon name="checkmark-done-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <hr class="line">                    
                </div>
                <button class="addtocat"><h4>Add to Categories</h4></button>
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Savings</th>
                    </tr>
                    <tr>
                        <td>Peter</td>
                        <td>Griffin</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td>Lois</td>
                        <td>Griffin</td>
                        <td>$150</td>
                    </tr>
                    <tr>
                        <td>Joe</td>
                        <td>Swanson</td>
                        <td>$300</td>
                    </tr>
                    <tr>
                        <td>Cleveland</td>
                        <td>Brown</td>
                        <td>$250</td>
                    </tr>
                </table>  
            </div>    
        </div>
       
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            // Menu toggle
                let toggle = document.querySelector('.toggle');
                let navigation = document.querySelector('.navigation');
                let main = document.querySelector('.main');

                toggle.onclick = function(){
                    navigation.classList.toggle('active');
                    main.classList.toggle('active');
                }
            // adding hover class over selected category
            let list = document.querySelectorAll('.navigation li');
            function activeLink(){
                list.forEach((item) =>
                item.classList.remove('hovered'));
                this.classList.add('hovered');
                }
                list.forEach((item) =>
                item.addEventListener('mouseover', activeLink));
        </script>
    </body>
</html>