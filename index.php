
<!doctype html>
<head>
    <title>Fee 2019-2020</title>
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
    <div>
        <table id="feeTable" class="table table-striped table-bordered student-list" cellspacing="0" width="100%">
            <colgroup>
                <col class="backgroundGradeSelect" />
                <col class="background1stInstallment" span="4" />
                <col class="background2ndInstallment" />
                <col class="background3rdInstallment" />
                <col class="background3rdInstallment" />
                <col class="backgroundTotal" />
                <col class="backgroundTotal" />
                <col class="backgroundTuition" />
                <col class="backgroundMinimum" />
            </colgroup>
            <thead align="center">
            <tr>
                <th class="th-sm" rowspan="2"><strong>GRADE <br> الصف </strong>
                </th>
                <th class="th-sm background1stInstallment" colspan="4" ><strong> 1ST INSTALLMENT <br> الدفعة الأولى</strong>

                </th>
                <th class="th-sm" rowspan="2"><strong><SPAN STYLE="writing-mode: vertical-lr;
                     -ms-writing-mode: tb-rl;
                     transform: rotate(180deg);">2ND INSTALLMENT<br>الدفعة الثانية</SPAN></strong>
                </th>
                <th class="th-sm" rowspan="2"><strong> <SPAN STYLE="writing-mode: vertical-lr;
                     -ms-writing-mode: tb-rl;
                     transform: rotate(180deg);">3RD INSTALLMENT <BR> WITH BUS<br>الدفعة الثالثة مع الحافلة</SPAN>
                    </strong>
                </th>
                <th class="th-sm" rowspan="2"><strong> <SPAN STYLE="writing-mode: vertical-lr;
                     -ms-writing-mode: tb-rl;
                     transform: rotate(180deg);">3RD INSTALLMENT <BR> WITHOUT BUS<br>الدفعة الثالثة دون الحافلة</SPAN></strong>
                </th>
                <th class="th-sm" rowspan="2"><strong> <SPAN STYLE="writing-mode: vertical-lr;
                     -ms-writing-mode: tb-rl;
                     transform: rotate(180deg);">TOTAL <br>WITHOUT BUS <br>المجموع دون حافلة</SPAN></strong>
                </th>
                <th class="th-sm" rowspan="2"><strong> <SPAN STYLE="writing-mode: vertical-lr;
                     -ms-writing-mode: tb-rl;
                     transform: rotate(180deg);">TOTAL <br>WITH BUS<br>المجموع مع الحافلة</SPAN></strong>
                </th>
                <th class="th-sm" rowspan="2"><strong> <SPAN STYLE="writing-mode: vertical-lr;
                     -ms-writing-mode: tb-rl;
                     transform: rotate(180deg);">TOTAL <br>TUITION FEES<br>الرسوم الدراسية الإجمالية</SPAN></strong>
                </th>
                <th class="th-sm" rowspan="2"><strong> <SPAN STYLE="writing-mode: vertical-lr;
                     -ms-writing-mode: tb-rl;
                     transform: rotate(180deg);">MINIMUM <BR>1ST INSTALLMENT<br>الحد الأدنى من الدفعة الأولى</SPAN></strong>
                </th>
            </tr>
            <tr>

                </th>
                <th class="th-sm" ><strong>TUITION FEES<br>رسوم دراسية</strong>
                </th>
                <th class="th-sm"><strong>BOOKS<br>رسوم الكتب</strong>
                </th>
                <th class="th-sm"><strong>UNIFORMS<br>رسوم موحدة</strong>
                </th>
                <th class="th-sm"><strong>BUS<br>رسوم الحافلة</strong>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>

                <td>
                    <select class="browser-default custom-select" onchange='applyfees(this.options[this.selectedIndex].text); '>
                        <option value="" disabled selected> Grade</option>
                        <option value="KG1">KG1</option>
                        <option value="KG2">KG2</option>
                        <option value='GR1'>GR1</option><option value='GR2'>GR2</option><option value='GR3'>GR3</option><option value='GR4'>GR4</option><option value='GR5'>GR5</option><option value='GR6'>GR6</option><option value='GR7'>GR7</option><option value='GR8'>GR8</option><option value='GR9'>GR9</option><option value='GR10'>GR10</option><option value='GR11'>GR11</option><option value='GR12'>GR12</option>                        <option hidden> select your grade</option>
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
                <td></td>
                <td></td>
                <td id='delstudent'><span   onclick='deleteRow(this)' title='Remove Student' style='cursor: pointer; color:red' class='close'>&#10008;</span></td>
            </tr>
            </tbody>
        </table>
        <button onclick="addstudent()" id="addstudent" title="Add Student" class="btn btn-sm "> &#43; Add Student
        </button>
        <button type="button" class="btn btn-primary btn-sm"  id='printbtn'
                onclick="printJS({printable: 'printFee', type: 'html', documentTitle: 'Fees Structure 2019 - 2020', header: 'Fees Structure 2019 - 2020', headerStyle: 'font-weight: 300px; text-align:center' ,ignoreElements: ['addstudent', 'delstudent', 'printbtn'],targetStyles: '*',  css: 'css/print.css'})">PRINT</button>

        <div>
            <div >
            <div style="float: left; max-width: 500px">
                <br>
                <p><u>Note</u></p>
                <ul style="list-style-type:disc;">
                    <li>Book fee, Uniform Fee & Bus fee may be increased (subject to Ministry's approval)</li>
                    <li>A placement fee of AED 500 will be applicable and will be offset against the Tuition Fees for the first Term</li>
                    <li>The Tuition Fees should be paid in 3(Three) installments at the beginning of every trimester</li>
                    <li>The Transportation fees (if applicable), should be paid at the beginning of the academic year.</li>
                </ul>
            </div>
            <div style="float:right; max-width: 600px">
                <br>
                <p style="float: right;"><u>ملحوظة</u></p><br><br>
                <ul style="list-style-type:disc; text-align: right; direction:rtl;">
                    <li>يمكن زيادة رسوم الحجز ورسوم موحدة للحافلة (رهنا بموافقة الوزارة)</li>
                    <li>سيتم تطبيق رسوم استحقاق بقيمة 500 درهم وسيتم تعويضها مقابل الرسوم الدراسية للفصل الأول</li>
                    <li>يجب دفع الرسوم الدراسية على 3 أقساط (3) في بداية كل الثلث</li>
                    <li>يجب دفع رسوم النقل (إذا كانت قابلة للتطبيق) في بداية العام الدراسي</li>
                </ul>
            </div>
        </div>
        </div>

    </div>
</div>

<!--java script-->

<script>

    // Add row to table
    function addstudent() {
        var newRow = jQuery("\
        <tr>\
        <td><select id='grselect' onchange='applyfees(this.options[this.selectedIndex].text); ' class='form-control btn-select'>\n\
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
        <td class=tdstyle ></td>\n\ \
        <td class=tdstyle ></td>\n\
        <td class=tdstyle ></td>\n\
         <td class=tdstyle ></td>\n\
         <td class=tdstyle ></td>\n\
        <td id='delstudent'><span   onclick='deleteRow(this)' title='Remove Student' style='cursor: pointer; color:red' class='close'>&#10008;</span></td></tr>");
        jQuery('table.student-list').append(newRow);
    }

    // delete row from table
    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("feeTable").deleteRow(i);
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
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >4500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdWithBus" + rowId + "'>6700</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='thirdWithoutBus" + rowId + "'>3200</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='totalWithoutBus" + rowId + "'>14200</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='totalWithBus" + rowId + "'>17700</label>";
        row.cells[10].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>13270</label>";
        row.cells[11].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>6500</label>";

    }

    function feesGR123(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>6080</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1320</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >5500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdWithBus" + rowId + "'>7150</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='thirdWithoutBus" + rowId + "'>3650</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='totalWithoutBus" + rowId + "'>16650</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='totalWithBus" + rowId + "'>20150</label>";
        row.cells[10].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>15230</label>";
        row.cells[11].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>7500</label>";
    }

    function feesGR4(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>6080</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1320</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >6500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdWithBus" + rowId + "'>9030</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='thirdWithoutBus" + rowId + "'>5530</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='totalWithoutBus" + rowId + "'>19530</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='totalWithBus" + rowId + "'>23030</label>";
        row.cells[10].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>18110</label>";
        row.cells[11].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>7500</label>";
    }


    function feesGR56(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>6720</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1680</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >7000</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdWithBus" + rowId + "'>7890</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='thirdWithoutBus" + rowId + "'>4390</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='totalWithoutBus" + rowId + "'>19890</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='totalWithBus" + rowId + "'>23390</label>";
        row.cells[10].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>18110</label>";
        row.cells[11].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>8500</label>";
    }


    function feesGR78(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>6720</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1680</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >8000</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdWithBus" + rowId + "'>11620</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='thirdWithoutBus" + rowId + "'>8120</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='totalWithoutBus" + rowId + "'>24620</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='totalWithBus" + rowId + "'>28120</label>";
        row.cells[10].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>22840</label>";
        row.cells[11].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>8500</label>";
    }

    function feesGR9(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>7480</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1920</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >9500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdWithBus" + rowId + "'>14710</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='thirdWithoutBus" + rowId + "'>11210</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='totalWithoutBus" + rowId + "'>30210</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='totalWithBus" + rowId + "'>33210</label>";
        row.cells[10].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>28190</label>";
        row.cells[11].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>9500</label>";
    }
    function feesGR10(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>8200</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1200</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >9500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdWithBus" + rowId + "'>13990</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='thirdWithoutBus" + rowId + "'>10490</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='totalWithoutBus" + rowId + "'>29490</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='totalWithBus" + rowId + "'>32990</label>";
        row.cells[10].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>28190</label>";
        row.cells[11].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>9500</label>";
    }

    function feesGR11(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>6640</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>2760</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >11500</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdWithBus" + rowId + "'>13550</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='thirdWithoutBus" + rowId + "'>10050</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='totalWithoutBus" + rowId + "'>31050</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='totalWithBus" + rowId + "'>34550</label>";
        row.cells[10].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>28190</label>";
        row.cells[11].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>9500</label>";
    }

    function feesGR12(row, rowId) {
        row.cells[1].innerHTML = "<label  class=form-control  id='tuition" + rowId + "'>7600</label>";
        row.cells[2].innerHTML = "<label  class=form-control  id='book" + rowId + "'>1800</label>";
        row.cells[3].innerHTML = "<label  class=form-control id='uniform" + rowId + "'>100</label>";
        row.cells[4].innerHTML = "<label  class=form-control id='bus" + rowId + "' >3500</label>";
        row.cells[5].innerHTML = "<label  class=form-control id='installment2" + rowId + "' >11000</label>";
        row.cells[6].innerHTML = "<label   class=form-control id='thirdWithBus" + rowId + "'>13090</label>";
        row.cells[7].innerHTML = "<label   class=form-control id='thirdWithoutBus" + rowId + "'>9590</label>";
        row.cells[8].innerHTML = "<label   class=form-control id='totalWithoutBus" + rowId + "'>30090</label>";
        row.cells[9].innerHTML = "<label   class=form-control id='totalWithBus" + rowId + "'>33590</label>";
        row.cells[10].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>28190</label>";
        row.cells[11].innerHTML = "<label   class=form-control id='firstMinimum" + rowId + "'>9500</label>";
    }
</script>


<!--end of java scripts-->

</body>


