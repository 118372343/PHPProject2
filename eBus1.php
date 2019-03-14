<!--Creating a session variable and assigning it to txtTotal-->

<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: "Impact", Charcoal, sans-serif;
  font-size: 20px;
}
</style>
    <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
        <h1>Consultancy Shop</h1>
        <hr />
        <center>
                    <table cellspacing="10">
            <tr>
                            <td><b>Services</b></td>
            </tr>
            <tr>
                            <td>BlockChain</td>
                            <td><input type="radio" id="BlockChain" name="rdoGroup" value="1" /></td>
                        </tr>               
            <tr>
                            <td>Autonomous Things</td>
                            <td><input type="radio" id="Autonomous Things" name="rdoGroup" value="5" /></td>
                        </tr>               
            <tr>
                            <td>Immersive Experiences</td>
                            <td><input type="radio" id="Immersive Experiences" name="rdoGroup" value="30" /></td>
                        </tr>   
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
        <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
        </tr>
        <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
        </tr>
        <tr>
                    <td>-Discount @30%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
        </tr>
                <tr>
                    <td>+VAT @40%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
        </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
            </table>
        </center>
   
    <br />
        <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
    </form>
</div>
       
       <script type="text/javascript">
        function calcSub() {
            //Assigning variables to the values
            var subAmount = parseFloat(document.getElementById('txtSubTot').value);
            var BlockChain = parseFloat(document.getElementById('BlockChain').value);
            var Autonomous Things = parseFloat(document.getElementById('Autonomous Things').value);
            var Immersive Experiences = parseFloat(document.getElementById('Immersive Experiences').value);
           
//            If radio buttons are clicked, values are assigned
            if (document.getElementById('BlockChain').checked) {
                document.intCalc.txtSubTot.value = BlockChain;
                subAmount = BlockChain;
                calculation(subAmount);
               
            }
        else if (document.getElementById('Autonomous Things').checked) {
                document.intCalc.txtSubTot.value = Autonomous Things;
                subAmount = Autonomous Things;
                 calculation(subAmount);
              
            }
        else if (document.getElementById('Immersive Experiences').checked) {
                document.intCalc.txtSubTot.value = Immersive Experiences;
                subAmount = Immersive Experiences;
                 calculation(subAmount);
            }
        }   
       
         //Function for calculating the values
        function calculation(parmSTotal){
           var subTotal = parseFloat(parmSTotal);
           var discCalc = parseFloat(subTotal * .30);
           var vatCalc = parseFloat(subTotal * .40);
           var total = parseFloat(subTotal - discCalc + vatCalc);
          
           //Inserting them into the correct fields
           document.intCalc.txtDisc.value = discCalc; 
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
         
        }
//     

    </script>
   
    <script>
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
    document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
    document.getElementById("txtTotal").value="";
}
    </script>
</body>
</html>