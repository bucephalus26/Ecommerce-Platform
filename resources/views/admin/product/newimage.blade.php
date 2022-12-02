<!DOCTYPE html>
<style>
    *{
        font-family: 'Ubuntu', sans-serif;
    }
    :root{
        --blue: #287bff;
        --white: #fff;
        --grey: #f5f5f5;
        --black1: #222;
        --black2: #999;
    }
    a{
        text-decoration: none;
        color:black;
    }
    .outsideborder{
        position:relative;
        width:500px;
        height:600px;
        background: var(--black1);
        border-radius: 10px;
        border: 2px solid white;
    }
    td {
        font-weight:bold;
        text-align: center;
        padding: 24px 24px 24px 24px;
    }

    tr:nth-child(odd){background: var(--black2);}
    th {
        font-size:20xpx;
        left:100px;
        background: var(--black);
        color: white;
        border-radius:6px;
        padding: 24px 24px 24px 24px;
    }
    .table24e{
        position:relative;  
        top: 20px; 
        left:135px;  
        width:1200px;
    }
    .productname{
        position: relative;
        top:10px;
        left:135px;
        padding:13px;
        width:400px;
        color:black;
        font-weight: bold;
        font-size:30px;
    }
    .cardbox{
        position: relative;
        left:120px;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(5,1fr);
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
        color: var(--black1);
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
    input[type=text] {
  float: right;
  width:200px;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: 2px solid black;
  border-radius:10px;
  font-size: 17px;
}
</style>
<html>
<head>
</head>
<body>
    <div class="cardbox">
        <div class="card">
            <div>
                <div class="numbers">Title</div>
                <div class="cardName"><input type="text" placeholder="Search.."></div>
            </div>
            <div class="iconBx">
                <ion-icon name="person-add-outline"></ion-icon>                            
            </div>
        </div>       
        <div class="card">
            <a href="product.blade.php">
                <div>
                    <div class="numbers">Return</div>
                    <div class="cardName">To Projects Page</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="person-add-outline"></ion-icon>                            
                </div>
            </a>
        </div>       
        <div class="card">
            <div>
                <div class="numbers">Image</div>
                <div class="cardName"><input type="file" id="myFile" name="filename"><input type="submit"></div>
            </div>
            <div class="iconBx">
                <ion-icon name="checkmark-done-circle-outline"></ion-icon>
            </div>
        </div>
    </div>
    <div class="productname">Lacoste Images</div>
    <table class="table24e">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Image</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td class="td">Peter</td>
            <td class="td">Griffin</td>
            <td class="td">$100</td>
            <td class="td"><button class="edits">Delete</button></td>
        </tr>
        <tr>
            <td class="td">Peter</td>
            <td class="td">Griffin</td>
            <td class="td">$100</td>
            <td class="td"><button class="edits">Delete</button></td>
        </tr>
        <tr>
            <td class="td">Peter</td>
            <td class="td">Griffin</td>
            <td class="td">$100</td>
            <td class="td"><button class="edits">Delete</button></td>
        </tr>
        <tr>
            <td class="td">Peter</td>
            <td class="td">Griffin</td>
            <td class="td">$100</td>
            <td class="td"><button class="edits">Delete</button></td>
        </tr>
    </table>   
</body>
</html>    