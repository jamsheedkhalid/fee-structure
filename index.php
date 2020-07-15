<!doctype html>
<head>
    <title>Fee Structure</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>

    <script src="js/print/print.min.js"></script>
    <link rel="stylesheet" type="text/css" href="js/print/print.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

<div id='printFee' class="container" style="padding-top: 20px">
    
    <div class='row' style='width:93%'>
        <div class="col3">
            <h10><b>AL SANAWABAR SCHOOL </b></h10><br>
            <small> Manaseer School Road, P.o Box 1781</small><br>
            <small> TEL: 03 76798889</small><br>
            <small> www.alsanawbarschool.com</small>
        </div>
        <div class="col3">
            <img id="logo_img" src="images/sanawbar-logo.jpeg" width="80px" height="80px">
        </div>
        <div class="col3" style="float: right;">
            <p id="feedate" style="float:right;"></p>
        </div>
    <div>
    <div class='row'>
        <div class='col3' id='debug'></div>
        <div class='col3' id='academic_year_div'>
            <label><strong>Academic Year</strong></label>
            <select id='academic_years'></select>
        </div>
        <div class='col3'></div>
    </div>
        <table id="feeTable" class="table table-striped table-bordered student-list" cellspacing="0" width="100%">
            <colgroup>
                <col class="backgroundGradeSelect" />
                <col class="background1stInstallment" span="4" />
                <col class="background2ndInstallment" />
                <col class="background3rdInstallment" />
                <col class="backgroundTuition"/>
                <col class="backgroundTotal" />
                <col class="backgroundTotal" />
                <col style="background: #ffffff"
            </colgroup>
            <thead align="center">
            <tr>
                <th class="th-sm" rowspan="2"><strong>GRADE <br> الصف </strong>
                </th>
                <th class="th-sm background1stInstallment" colspan="4" ><strong> 1ST INSTALLMENT <br> الدفعة الأولى</strong>

                </th>
                <th class="th-sm" rowspan="2"><strong><SPAN>2ND INSTALLMENT<br>الدفعة الثانية</SPAN></strong>
                </th>

                <th class="th-sm" rowspan="2"><strong> <SPAN>3RD INSTALLMENT <BR> الدفعة الثالثة </SPAN></strong>
                </th>

                <th class="th-sm" rowspan="2"><strong> <SPAN>TOTAL <br>المجموع </SPAN></strong>
                </th>
                <th class="th-sm" rowspan="2"><strong> <SPAN>TOTAL <br>TUITION FEES<br> مجموع الرسوم الدراسية </SPAN></strong>
                </th>
                <th class="th-sm" rowspan="2"><strong> <SPAN>MINIMUM <BR>1ST INSTALLMENT<br>الحد الأدنى من الدفعة الأولى</SPAN></strong>
                </th>
            </tr>
            <tr>
                <th class="th-sm" ><strong>TUITION FEES<br>الرسوم الدراسية</strong>
                </th>
                <th class="th-sm"><strong>BOOKS<br>رسوم الكتب</strong>
                </th>
                <th class="th-sm"><strong>UNIFORMS<br>رسوم اللباس</strong>
                </th>
                <th class="th-sm"><strong>BUS<br>رسوم الحافلة</strong>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <select class="browser-default custom-select backgroundGradeSelect"
                            onchange='applyfees(this.options[this.selectedIndex].text); '>
                        <option value="" disabled selected> Grade</option>
                        <option value="KG1">KG1</option>
                        <option value="KG2">KG2</option>
                        <option value='GR1'>GR1</option>
                        <option value='GR2'>GR2</option>
                        <option value='GR3'>GR3</option>
                        <option value='GR4'>GR4</option>
                        <option value='GR5'>GR5</option>
                        <option value='GR6'>GR6</option>
                        <option value='GR7'>GR7</option>
                        <option value='GR8'>GR8</option>
                        <option value='GR9'>GR9</option>
                        <option value='GR10'>GR10</option>
                        <option value='GR11'>GR11</option>
                        <option value='GR12'>GR12</option>
                        <option hidden> select your grade</option>
                    </select></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="background: white" id='noBus'><span onclick="removeBus(this)"
                                                               style="cursor: pointer;color:darkred;font-size: x-large"
                                                               title="Cancel Transportation Fee"
                                                               class="fas fa-bus-alt"></span></td>
                <td style="background: white" id='delstudent'><span onclick='deleteRow(this)' title='Remove Student'
                                                                    style='cursor: pointer; color:darkred'
                                                                    class='close'>&#10008;</span></td>
            </tr>
            </tbody>
        </table>
        <button onclick="addstudent()" id="addstudent" title="Add Student" class="btn btn-sm "> &#43; Add Student
        </button>
        <button type="button" class="btn btn-primary btn-sm" id='printbtn'
            onclick="printJS({printable: 'printFee', type: 'html', documentTitle: 'Fees Structure - بُنية الرسوم', header: 'Fees Structure - بنية الرسوم', headerStyle: 'font-weight: 300px; text-align:center' ,ignoreElements: ['addstudent', 'delstudent', 'noBus','printbtn'],targetStyles: '*',  css: 'css/print.css'})">
            PRINT
        </button>

        <div>
            <div >
                <div style="float: left; max-width: 500px">
                    <br>
                    <p><u>Note</u></p>
                    <ul style="list-style-type:disc;">
                        <li>Book fee, Uniform Fee & Bus fee may be increased (subject to Ministry's approval)</li>
                        <li>A placement fee of AED 500 will be applicable and will be offset against the Tuition Fees
                            for the first Term
                        </li>
                        <li>The Tuition Fees should be paid in 3(Three) installments at the beginning of every
                            trimester
                        </li>
                        <li>The Transportation fees (if applicable), should be paid at the beginning of the academic
                            year.
                        </li>
                    </ul>
                </div>
                <div style="float:right; max-width: 600px">
                    <br>
                    <p style="float: right;"><u>ملاحظة</u></p><br><br>
                    <ul style="list-style-type:disc; text-align: right; direction:rtl;">
                        <li>قد يتم زيادة رسوم الكتب، اللباس، و المواصلات (وذلك بعد الحصول على موافقة الوزارة)</li>
                        <li>سيتم استحقاق رسوم تسجيل بقيمة 500 درهم وسيتم إضافتها لاحقاً للرسوم الدراسية للفصل الأول</li>
                        <li>يجب دفع الرسوم الدراسية على 3 أقساط (دفعة عند بداية كل فصل)</li>
                        <li>يجب دفع رسوم المواصلات (في حال استحقاقها) في بداية العام الدراسي</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!--java script-->

<script>
    // Today's Date
    var date = new Date();
    document.getElementById("feedate").innerHTML = date.toDateString();

    // Initiate Academic Years dropdown
    // function fill_academic_year(){
    //     document.getElementById('academic_years_en_label').innerHTML = document.getElementById('academic_years_en').options[ document.getElementById('academic_years_en').selectedIndex].text
    // }
    
    let yearsArray = [];
    httpyears = new XMLHttpRequest();
    httpyears.onreadystatechange = function () {
        if (this.readyState === 4) {
            let str = this.responseText;
            yearsArray = str.split("\t");
        }
    };
    httpyears.open("GET", "db/initAcademicYears.php", false);
    httpyears.send();

    let select = document.getElementById('academic_years');
    var length = select.options.length;
    for (i = length-1; i >= 0; i--) {
        select.options[i] = null;
    }

    for (i = 0; i<yearsArray.length-1; i++ ) {
        select.add(new Option(yearsArray[i]));
    }

    // Add row to table
    function addstudent() {
        var newRow = jQuery("\
        <tr>\
        <td><select id='grselect' onchange='applyfees(this.options[this.selectedIndex].text); ' class='form-control btn-select backgroundGradeSelect '>\n\
        <option selected disabled> Grade</option>\n\
        <option value='KG1'>KG1</option>\n\
        <option value='KG2'>KG2</option>\n\
        <option value='GR1'>GR1</option>\n\
        <option value='GR2'>GR2</option>\n\
         <option value='GR3'>GR3</option>\n\
         <option value='GR4'>GR4</option>\n\
        <option value='GR5'>GR5</option>\n\
         <option value='GR6'>GR6</option>\n\
         <option value='GR7'>GR7</option>\n\
        <option value='GR8'>GR8</option>\n\
        <option value='GR9'>GR9</option>\n\
        <option value='GR10'>GR10</option>\n\
        <option value='GR11'>GR11</option>\n\
        <option value='GR12'>GR12</option>\n\
        <option  hidden> select your grade</option>\n\
        <td class=tdstyle ></td>\n\
        <td class=tdstyle ></td>\n\
        <td class=tdstyle ></td>\n\
        <td class=tdstyle ></td>\n\
        <td class=tdstyle ></td>\n\
        <td class=tdstyle ></td>\n\
        <td class=tdstyle ></td>\n\
        <td class=tdstyle ></td>\n\
        <td class=tdstyle ></td>\n\
        <td style='background: white' id='noBus'><span onclick='removeBus(this);' style='display: inline; cursor: pointer;color:darkred;font-size: x-large' title='Cancel Transportation Fee' class='fas fa-bus-alt'></span></td>\n\
        <td style='background: white' id='delstudent'><span   onclick='deleteRow(this)' title='Remove Student' style='cursor: pointer; color:darkred' class='close'>&#10008;</span></td></tr>");
        jQuery('table.student-list').append(newRow);
    }
    // delete row from table
    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("feeTable").deleteRow(i);
    }

    function removeBus(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById('bus' + i).textContent = 0;
        var total = document.getElementById('total' + i).textContent;
        document.getElementById('total' + i).textContent = +total - 3500;

        var table = document.getElementById('feeTable');
        var row = table.getElementsByTagName('tr')[i];
        row.cells[10].innerHTML = "<span onclick='addBus(this);' style='cursor: pointer;color:darkgreen;font-size: x-large;' title='Add Transportation Fee' class='fas fa-bus-alt'></span>";

    }

    function addBus(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById('bus' + i).textContent = 3500;
        var total = document.getElementById('total' + i).textContent;
        document.getElementById('total' + i).textContent = +total + 3500;

        var table = document.getElementById('feeTable');
        var row = table.getElementsByTagName('tr')[i];
        row.cells[10].innerHTML = "<span onclick='removeBus(this);' style='cursor: pointer;color:darkred;font-size: x-large;' title='Remove Transportation Fee' class='fas fa-bus-alt'></span>";

    }
    // Apply fees to the table
    function applyfees(str) {
        var table = document.getElementById('feeTable');
        var cells = table.getElementsByTagName('td');
        for (var i = 0; i < cells.length; i++) {
            // Take each cell
            var cell = cells[i];
            // do something on onclick event for cell
            cell.onchange = function () {
                // Get the row id where the cell exists
                var rowId = this.parentNode.rowIndex;
                var rowSelected = table.getElementsByTagName('tr')[rowId];
                switch (str) {
                    case "KG1":
                    case "KG2":
                        feesKG(rowSelected, rowId);
                        break;
                    case "GR1":
                    case "GR2":
                    case "GR3":
                        feesGR123(rowSelected, rowId);
                        break;
                    case "GR4":
                        feesGR4(rowSelected,rowId);
                        break;
                    case "GR5":
                    case "GR6":
                        feesGR56(rowSelected, rowId);
                        break;
                    case "GR7":
                    case "GR8":
                        feesGR78(rowSelected, rowId);
                        break;
                    case "GR9":
                        feesGR9(rowSelected, rowId);
                        break;
                    case "GR10":
                        feesGR10(rowSelected, rowId);
                        break;
                    case "GR11":
                        feesGR11(rowSelected, rowId);
                        break;
                    case "GR12":
                        feesGR12(rowSelected, rowId);
                        break;
                }
            }
        }
    } //end of function
</script>

<!--Fee English-->
<script>
    function feesKG(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>5570</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>840</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>90</label>";
        row.cells[4].innerHTML = "<label   class=form-control id='bus" + rowId + "' >3500 </label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >4500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdInstallment" + rowId + "'>3200</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='total" + rowId + "'>17700</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>13270</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>6500</label>";
    }
    function feesGR123(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>6080</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1320</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >5500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdInstallment" + rowId + "'>3650</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='total" + rowId + "'>20150</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>15230</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>7500</label>";
    }
    function feesGR4(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>6080</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1320</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >6500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdInstallment" + rowId + "'>5530</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='total" + rowId + "'>23030</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>18110</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>7500</label>";
    }
    function feesGR56(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>6720</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1680</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >7000</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdInstallment" + rowId + "'>4390</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='total" + rowId + "'>23390</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>18110</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>8500</label>";
    }
    function feesGR78(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>6720</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1680</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >8000</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdInstallment" + rowId + "'>8120</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='total" + rowId + "'>28120</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>22840</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>8500</label>";
    }
    function feesGR9(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>7480</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1920</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >9500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdInstallment" + rowId + "'>11210</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='total" + rowId + "'>33210</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>28190</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>9500</label>";
    }
    function feesGR10(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>8200</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1200</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >9500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdInstallment" + rowId + "'>10490</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='total" + rowId + "'>32990</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>28190</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>9500</label>";
    }
    function feesGR11(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>6640</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>2760</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >11500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdInstallment" + rowId + "'>10050</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='total" + rowId + "'>34550</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>28190</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>9500</label>";
    }
    function feesGR12(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>7600</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1800</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >11000</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdInstallment" + rowId + "'>9590</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='total" + rowId + "'>33590</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>28190</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>9500</label>";
    }
</script>


<!--end of java scripts-->

</body>