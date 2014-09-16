 <script src="scripts/ValidateForm.js" type="text/javascript"></script>
<div class="formDiv">
    <h1 class="reservationH1">Резервирай тази маса</h1> 
    <div class="formDiv1">
        <form class="reservationForm" action="./Validate/reservationsFormValidate.php" method="POST" name="formReservation">
            <table class="tableForm">
                <tr>
                    <td>Име: </td>
                    <td><input type="text" class="reservationInput" onblur="emptyName(this)" id="firstName" name="name" value=""/>
                        <div id="errorName"></div>
                    </td>
                </tr>
                 <tr>
                    <td>Фамилия: </td>
                    <td><input class="reservationInput" type="text" onblur="emptyFamily(this)" id="family" name="family"/>
                        <div id="errorFamily"></div>
                    </td>
                </tr>
                <tr>
                    <td>Телефон за връзка: </td>
                    <td><input class="reservationInput" onblur="phonenumber(this)" value="" type="text" name="phone" id="phone"/>
                        <div id="errorPhone"></div>
                    </td>
                </tr>
                <tr>
                    <td>Час: </td>
                    <td><input class="reservationInput" onblur="timeValidate(this)" value="" type="text" name="time" id="time"/>
                        <div id="format">Часът трябва да е въведен във формат: hh:mm</div>
                        <div id="errorTime"></div>
                    </td>
                </tr>   
                <tr>
                    <td>Дата: </td>
                    <td><input class="reservationInput" onblur="dataValidate(this)" value="" type="text" name="data" id="data"/>
                        <div id="formatData">Датата трябва да е въведен във формат: dd.mm.yyyy</div>
                        <div id="errorData"></div>
                        <div id="emptyData">Празна дата се приема за текущия ден!!!</div>
                    </td>
                </tr>  
                <tr>
                    <td>Кода от картинката: </td>
                    <td><input class="reservationInput" type="text" name="captcha"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="button" onclick="submitForm()" class="reservationSubmit" style="width:100%"  value="Резервирай"/></td>
                </tr>
            </table>
        </form>
    </div>
</div>
