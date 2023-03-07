<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="popalertBox">
        <style>
            .popalertBox{
                position: fixed;
                width: 100vw;
                bottom: 60px;
                display: none;
                z-index: 220;
            }
            .popalertBox .mypop{
                width: max-content;
                max-width: 90%;
                margin: 0px auto;
                padding: 10px 20px;
                border-radius: 10px;
                background-color: #343434;
                transition: opacity 0.3s ease-in;
                color: white;
                font-weight: normal;
                font-family: 'Raleway', sans-serif;
                font-size: 14px;
                letter-spacing: 0.5px;
                opacity:1;
            }
        </style>
        <div class="mypop">Pop Here</div>
        <script>
            function popAlert(text){
                $(".popalertBox").css('display', 'block');
                $(".popalertBox .mypop").css('opacity', '1').text(text);
                setTimeout(() => {
                    $(".popalertBox .mypop").css('opacity', '0');
                    setTimeout(() => {
                        $(".popalertBox").css('display', 'none');
                    }, 400);
                }, 2000);
            }
        </script>
    </div>
    
    <div class="page">
        
        <div class="super-super">
            <div class="table-super-hold" style="display:none">
                
                <div class="head hold"></div>
                <div class="table-super">
                    <div class="table-item">
                        <input type="text">
                    </div>
                    <div class="table-item">Atehe d</div>
                </div>
            </div>       
        </div> 
        <div class="head">
            <input type="text" value="" placeholder="Enter Head Here">
        </div>
        
        <div class="download save" id="save">
            Save 
        </div>
        <div class="download" id="download">
            Download 
        </div>

    </div>

    <style>
        canvas{
            display:none;
        }
        body, *{
            font-family: 'Raleway', sans-serif;
            font-weight:bold;
            font-size: 15px;
        }
        input{
            text-align: center;
            font-size: 35px;
            outline: none;
            border: none;
        }
        .head.hold{
            font-size:40px;
        }

        .head{
            text-align:center;
            font-weight:bold;
            font-size: 20px;
            height:max-content;
            padding: 10px;
        }
        .table-super-hold{
            width: 100%;
            overflow-x:scroll;
            padding-top: 20px;
        }
        .table-super{
            width: max-content;
            display: grid;
            grid-template-columns: repeat(2, auto) ;
            gap: 2px;
            background-color: #e4e4e4;
            width: 
            padding: 1px;
            margin: 15px;
            font-size: 14px;
        }
        .table-super .table-item{
            background-color: white;
            display: flex;
            flex-direction:column;
            justify-content: center;
            width: 200px;
            height: 70px;
            text-align: center;            
            position: relative;
        }
        .table-super .table-item.iseven{
            background-color: #f7d9b5;
        }
        
        .table-super .table-item.iseven textarea{
            background-color: #f7d9b5;
        }

        .table-super .table-item.ishead{
            background-color: #c46e06;
        }
        
        .table-super .table-item.ishead textarea{
            background-color: #c46e06;
            color: white;
        }
        div.table-item.istophead{
            height: 100px;            
            font-size: 1.7rem;
        }
        .issidehead{
            /* width: 100px; */
        }

        .table-super .table-item textarea{
            outline:none;
            text-align:center;
            border:none;
            width: 100%;
            padding: 20px 0;
            vertical-align:middle;
            display: inline-block;
            height:max-content;
            font-size: 1.5rem;

        }

        .super-super{
            padding: 10px;
            width: 100vw;
        }
        .download{
            padding: 20px 5px;
            text-align: center;
            background-color: #c46e06;
            color: white;
            box-shadow: 0px 0px 15px -2px grey;
            border-radius: 10px;
            margin: 20px 0;
        }

        .hidescroll::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .hidescroll {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>

    <script>

        popAlert('Loading')
        
        let tabledata = [
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
            [{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12},{colname:"row", value:12}],           
        ]
        $(".table-super").css({
            "grid-template-columns": `repeat(${tabledata[0].length}, auto)`
        })

        let url = window.location.origin + '/apis/gettext';
 
        axios({
            method: 'POST',
            url: url,
            headers: {
                'Cache-Control': 'no-cache',
                "X-CSRF-TOKEN" : '{{csrf_token()}}'
            },
            data: {},
        }).then(response => {
            console.log(response);
            let headtext = response.data.tabletext[0]['others'];
            $(".hold").text(headtext);
            $(".head input").val(headtext);
            tabledata = JSON.parse(response.data.tabletext[0]['tabletext']);
            let cell_html = '';

            for (let i = 0; i < tabledata.length; i++) {
                const row = tabledata[i];
                for (let j = 0; j < row.length; j++) {
                    const cell = row[j];
                    let rowtype = 'isodd';
                    let issidehead = '';
                    let istophead = '';
                    let ishead = '';
                    if (i % 2 == 0){
                        
                        rowtype = 'iseven';
                    }
                    if (i == 0){
                        istophead = 'istophead';        
                        ishead = 'ishead';

                    }
                    if (j == 0){
                        ishead = 'ishead';
                        issidehead = 'issidehead';                    
                    }
                    cell_html += `<div class="table-item ${cell.colname} ${ishead} ${issidehead} ${istophead} ${rowtype}"><textarea row_num="${i}" col_num="${j}"  class="hidescroll" cols="50" row="4" type="text" value="">${cell.value}</textarea></div>`
                    
                }            
            }
            $(".table-super").html(cell_html);

            $(".table-super-hold").css({
                display:'block'
            })

            $('textarea').bind('input propertychange', function() {
                let row = $(this).attr('row_num');
                let col = $(this).attr('col_num');
                tabledata[row][col]['value'] = $(this).val();
            });
        }).catch(error => console.error(error))

        $("#save").click(function(){
            let tstring = JSON.stringify(tabledata);
            console.log("Saving");          
            popAlert('Saving Data To Database'); 

            let url = window.location.origin + '/apis/save';
            axios({
                method: 'POST',
                url: url,
                headers: {
                    'Cache-Control': 'no-cache',
                    "X-CSRF-TOKEN" : '{{csrf_token()}}'
                },
                data: {
                    tabletext:tstring,
                    others:$(".head input").val()
                },
            }).then(response => {
                console.log(response);
                if (response.data.status == 200){
                    popAlert("Data Successfully saved");
                }
            })
            .catch(error => console.error(error))




        })
        $("#download").click(function(){
            popAlert("Downloading, Please wait...")
            downloadData()
        })

        
        function downloadData(){

            $(".super-super").css("width", 'max-content');
            
            let w = $(".super-super").width() + 20;
            let h = $(".super-super").height() + 20;
            window.scrollTo(0,0)


            html2canvas(document.querySelector(".super-super"), {
                width: w,
                height: h
                }).then(canvas => {
                    $(".super-super").css({"width": '100vw'});
                    var a = document.createElement('a');
                    a.href = canvas.toDataURL("image/png");
                    a.download ='Hairspeak Table.png';
                    a.click();
                    document.body.appendChild(canvas)
            });
        }
        

    </script>


</body>
</html>