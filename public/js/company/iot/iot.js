var IotserviceRepository = new (function(){
    let iotserviceList = [];
    let datatableObject = null;
    let modalDetail = null;
    let modalOutput = null;
    let idDB=null;


    this.initialAndRun = () => {
        this.refreshDatatable();
    };

    this.refreshDatatable = () => {
        showLoadingStatus(true);
        $.ajax({
            url: "http://localhost:8000/api/iot/iotservicedata",
            method: 'GET',
            success: function (result) {
                console.log(result);
                initialDatatable();
                iotserviceList = result.iotService;
                showLoadingStatus(false);
                updateDatatableData(result);

                
            },
            error: function (error) {
                console.log(error);
            }
        });

    };

    let initialDatatable = () => {
        if(datatableObject !== null)
        {
            return false ;
        }
        datatableObject = $('#datatable-iotservice').dataTable();
    }

    let showLoadingStatus = (show) => {
        if(show)
        {
            $('#datatable-iotservice').hide();
            $('#total-iotservice').hide();
        }
        else{
            $('#datatable-iotservice').show();
            $('#total-iotservice').show();
            $('.lds-roller').hide();
        }
    }

    let updateDatatableData = (iotserviceList) => {
        let Datatable = new Array();
        datatableObject.fnClearTable();
        let total_iotservice = 0;
        let str="";
        $.each(iotserviceList.iotService, function (index, item) {
            var ret = [];
            idDB=item.id;
            ret[0] = item.name;
            ret[1] = item.alias;
            ret[2] = item.type;
            ret[3] = item.status;
            if(item.type=="output")
            {
                    console.log(index)
                    ret[4] = ` <center>
                            <button type="button" class="btn btn-primary btn-sm btn-detail" index=${index} data-toggle="tooltip"
                                data-placement="top" title="Detail">
                                <i class="fas fa-list"></i>
                            </button>                           
                            <button type="button" class="btn btn-danger btn-sm btn-delete"  index=${index}  data-toggle="tooltip"
                                data-placement="top" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-sm btn-setting"  index=${index}  data-toggle="tooltip"
                                data-placement="top" title="setting">
                                <i class="fas fa-share-square"></i>
                            </button>
                        </center>`;
            }
            else
            {
                    ret[4] = ` <center>
                            <button type="button" class="btn btn-primary btn-sm btn-detail" index=${index} data-toggle="tooltip"
                                data-placement="top" title="Detail">
                                <i class="fas fa-list"></i>
                            </button>                           
                            <button type="button" class="btn btn-danger btn-sm btn-delete"  index=${index}  data-toggle="tooltip"
                                data-placement="top" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </center>`;
            }
            Datatable.push(ret);
            total_iotservice++;
        });
        datatableObject.fnAddData(Datatable);
        console.log(total_iotservice)
        $('#total-iotservice').html(`Total ${total_iotservice} IoTservices`)
        $('#datatable-iotservice').on('click', '.btn-detail', function () {
            console.log('ssss')
            onDetailClick($(this).attr('index'));
        });
        $('#datatable-iotservice').on('click', '.btn-setting', function () {
            console.log('btn-setting')
            onSettingClick($(this).attr('index'));
        });

    }

    let onDetailClick = (key) =>{
        if (modalDetail === null) {
            modalDetail =
                `<div class="modal fade" id="detailIot">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="title-company">Webservice Details</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h6>Status : <span id="status-iot"><span></h6>
                            <h6>Service Name : <span id="name-iot"><span></h6>
                            <h6>Alias : <span id="alias-iot"><span></h6>
                            <h6>Description : <span id="note-iot"><span></h6>
                            <h6>Create Date : <span id="create-iot"><span></h6>
                            <h6>Update Date : <span id="update-iot"><span></h6>
                        </div>
                    </div>
                </div>
            </div>`;

            $('body').append(modalDetail);
        }

        $('#name-iot').html(iotserviceList[key].name);
        $('#alias-iot').html(iotserviceList[key].alias);
        $('#status-iot').html(iotserviceList[key].status);
        $('#note-iot').html(iotserviceList[key].description);
        $('#create-iot').html(iotserviceList[key].created_at);
        $('#update-iot').html(iotserviceList[key].updated_at);

        $("#detailIot").modal('show');
    }
    let onSettingClick = async (key) =>{
        console.log(key)
        let keyvalue=key;
        let data = await JSON.parse(iotserviceList[key].strJson) ;
        let dataOther ="";
        let dataPin ="";        
        console.log(data)
        Object.keys(data).forEach(function (key) {
            // if(data.other != undefined){
            //     console.log(data.other)
            // }
            if(key == "other"){
                console.log(data[key])
                let datatemp = data[key] ;
                Object.keys(datatemp).forEach(function (key){
                    dataOther = dataOther +`<input type='text' class="othername" name="othername[]" value=${key} class='mb-2 ' 
                    ' disabled>&nbsp;
                    <input type='text' class="othervalue" name="othervalue[]" id="other"
                         value=${datatemp[key]} >
                    </input>` ;
                    
                })
            }
            else if(key == "pin"){
                console.log(data[key])
                let i=0;
                let valkey = data[key];
                Object.keys(valkey).forEach(function (key){
                    let check=""
                    if(valkey[key]==1)
                    {
                        check = "checked";
                    }
                    dataPin = dataPin+`<input type=text value=${key} name="pinname[]" class='pinname mb-2 ' disabled> </input> &nbsp;
                    OFF
                    <label class="switch">
                        <input type="checkbox" id="pinvalue${i}" ${check}>
                        <span class="slider round"></span>
                    </label>
                    ON
                    <br>
                    `;
                    i++;
                })
            }
            
            
        })
        if (modalOutput === null) {
            modalOutput =
                `<div class="modal fade" id="settingIot">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="title-company">Send Output Data</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h6>Status : <span id="status-iot"><span></h6>
                            <h6>Service Name : <span id="name-iot"><span></h6>
                            <h6>Alias : <span id="alias-iot"><span></h6>
                            <h6>Description : <span id="note-iot"><span></h6>
                            <h6>Create Date : <span id="create-iot"><span></h6>
                            <h6>Update Date : <span id="update-iot"><span></h6>
                            <br>
                            <h6>Other Inputs</h6> 
                            <div id="dataOther"></div>   
                            <h6>Pins Setting</h6>
                            <div id="dataPin"></div>
                            <button type="button" class="btn btn-success btn-sm btn-send" index=${keyvalue} id="send_outputIoT">
                                send  
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            `;

            $('body').append(modalOutput);
        }

        $('#name-iot').html(iotserviceList[key].name);
        $('#alias-iot').html(iotserviceList[key].alias);
        $('#status-iot').html(iotserviceList[key].status);
        $('#note-iot').html(iotserviceList[key].description);
        $('#create-iot').html(iotserviceList[key].created_at);
        $('#update-iot').html(iotserviceList[key].updated_at);
        $('#dataOther').html(dataOther);
        $('#dataPin').html(dataPin);

        $("#settingIot").modal('show');
        $('#send_outputIoT').click(function(){
            //let key = $(this).attr('index')
            //console.log(key)
            //console.log(iotserviceList[key])
            let othername = document.getElementsByClassName("othername");
            let other_name  = [].map.call(othername, function( input ) {
                return input.value;
            });
            let othervalue = document.getElementsByClassName("othervalue");
            let other_value  = [].map.call(othervalue, function( input ) {
                return input.value;
            });
            let pinname = document.getElementsByClassName("pinname");
            let pin_name  = [].map.call(pinname, function( input ) {
                return input.value;
            });
            
            let stroutput={};
            let dataOutput ={} ;
            let dupstr={};
            for(let i=0;i<other_name.length;i++)
            {
                stroutput[other_name[i]] = other_value[i];
                dupstr[other_name[i]] = other_value[i];
            }
            dataOutput['other'] = dupstr ;
            dupstr={};
            for(let i=0;i<pin_name.length;i++)
            {
                let num_val = $('#pinvalue'+i).prop('checked')
                if(num_val==true)
                {
                    stroutput[pin_name[i]] = 1;
                    dupstr[pin_name[i]] = 1;
                }
                else
                {
                    stroutput[pin_name[i]] = 0;
                    dupstr[pin_name[i]] = 0;
                }
            }
            dataOutput['pin'] = dupstr ;
            let data_Output = JSON.stringify(dataOutput, undefined, 2);
            let str_output = JSON.stringify(stroutput, undefined, 2);
            $.ajax({
                url: "http://localhost:8000/api/iot/iotupdatedata",
                dataType: 'json',
                method: "POST",
                async: false,
                data:
                {
                    id_DB: idDB,
                    strJson:str_output,
                    pinfilds:data_Output,
                    
                },
                success: (res) => {
                    // toastr["success"]("Success");
                    console.log("success DB")
                },
                error: (res) => {
                    console.log(res);
                }
            });
            $.ajax({
                url: "http://localhost:8081/iotService/insertOutputIot",
                dataType: 'json',
                method: "POST",
                async: false,
                data:
                {
                    id_DB:idDB,
                    nameDW: iotserviceList[key].iot_name_DW,
                    data:
                    {
                        strJson:str_output,
                    }
                },
                success: (res) => {
                    // toastr["success"]("Success");
                    console.log("success DW")
                },
                error: (res) => {
                    console.log(res);
                }
            });
        });
    }


})

$(document).ready(function(){
    let iot =  IotserviceRepository;
    iot.initialAndRun({});
    
});