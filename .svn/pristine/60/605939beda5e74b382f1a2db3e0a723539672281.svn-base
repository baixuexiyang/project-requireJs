<?php
$q = trim(isset($_GET['q']) ? $_GET['q'] : "");
$callback = (isset($_GET['jsoncallback']) && $_GET['jsoncallback'] != "?") ? trim($_GET['jsoncallback']) : "";
//echo $q;
//echo $callback;
$code = trim(isset($_GET['code']) ? $_GET['code'] : "");
$status = trim(isset($_GET['status']) ? $_GET['status'] : "");
$errorMsg = trim(isset($_GET['errorMsg']) ? $_GET['errorMsg'] : "");
$param = trim($_GET['qtype']);
$page = trim($_GET['page']);

//Flash Upload Avatar result
$rs = array();

header("Content-type: application/json");
switch ($q) {
    case "getStatusAndErrorMsg":
        echo "{\"status\":\"" . $status . "\",\"errorMsg\":\"" . $errorMsg . "\"}";
        break;
    case "getCode":
        echo "{\"code\":\"" . $code . "\"}";
        break;
    case "getDialogPatientList":
        ?>
        { "data": [
        { "patientId": "1001", "patientName": "aaa<?php echo (isset($_GET['page']) && $_GET['page'] != "") ? ($_GET['page'] - 1) * 15 + 1 : "1" ?>", "receptionTime": "2013-06-26 12:34", "doctorName": "王医生", "diseaseName": "这是内容描述11111", "patientSex": "0", "medicalInsuranceCard": "123456625", "medicalCard": "123456625", "patientMobi": "15958164758","patientAge":"27" },
        { "patientId": "1021", "patientName": "bbb", "receptionTime": "2013-07-26 12:34", "doctorName": "张医生", "diseaseName": "这是内容描述2221", "patientSex": "1", "medicalInsuranceCard": "1111111", "medicalCard": "2222222", "patientMobi": "13987654321","patientAge":"17" },
        { "patientId": "1041", "patientName": "ccc", "receptionTime": "2013-08-26 12:34", "doctorName": "王医生", "diseaseName": "这是内容描述11111", "patientSex": "0", "medicalInsuranceCard": "3333333", "medicalCard": "123456625", "patientMobi": "1302546897d" },
        { "patientId": "1061", "patientName": "ddd", "receptionTime": "2013-09-26 12:34", "doctorName": "王医生", "diseaseName": "这是内容描述11111", "patientSex": "1", "medicalInsuranceCard": "123456625", "medicalCard": "44444444", "patientMobi": "15958164758" },
        { "patientId": "1071", "patientName": "eee", "receptionTime": "2013-06-26 12:34", "doctorName": "王医生", "diseaseName": "这是内容描述11111", "patientSex": "1", "medicalInsuranceCard": "123456625", "medicalCard": "123456625", "patientMobi": "15958164758" },
        { "patientId": "1081", "patientName": "粉嘟嘟", "receptionTime": "2013-06-26 12:34", "doctorName": "王医生", "diseaseName": "这是内容描述11111", "patientSex": "0", "medicalInsuranceCard": "123456625", "medicalCard": "123456625", "patientMobi": "15958164758" },
        { "patientId": "2011", "patientName": "卡嘉莉", "receptionTime": "2013-06-26 12:34", "doctorName": "王医生", "diseaseName": "这是内容描述11111", "patientSex": "0", "medicalInsuranceCard": "123456625", "medicalCard": "123456625", "patientMobi": "15958164758" },
        { "patientId": "2045", "patientName": "大玫瑰", "receptionTime": "2013-06-26 12:34", "doctorName": "王医生", "diseaseName": "这是内容描述11111", "patientSex": "1", "medicalInsuranceCard": "123456625", "medicalCard": "123456625", "patientMobi": "15958164758" },
        { "patientId": "4067", "patientName": "卡弗蒂", "receptionTime": "2013-06-26 12:34", "doctorName": "王医生", "diseaseName": "这是内容描述11111", "patientSex": "1", "medicalInsuranceCard": "123456625", "medicalCard": "123456625", "patientMobi": "15958164758" },
        { "patientId": "7980", "patientName": "迪克逊", "receptionTime": "2013-06-26 12:34", "doctorName": "王医生", "diseaseName": "这是内容描述11111", "patientSex": "0", "medicalInsuranceCard": "123456625", "medicalCard": "123456625", "patientMobi": "15958164758" }
        ],"totalCount":"43","pageSize":"10","startIndex":"<?php echo (isset($_GET['page']) && $_GET['page'] != "") ? ($_GET['page'] - 1) * 10 + 1 : "1" ?>"
        }
        <?php
        break;
    // 查询条件
    /* caId         : 诊区ID
     * officeId     : 科室ID
     * doctorId     : 医生ID   (可选) // 已分诊时才有
     * cardNo       : 患者卡号 (可选)
     * patientName  : 患者姓名 (可选)
     * offset       : 偏移量   (可选，默认为0) 仿照 SQL语法中的 offset 关键字
     * limit        : 每页记录数(可选，默认为10) 仿照 SQL语法中的 limit 关键字
     */
    case "getPatientTodoList":
        ?>
        { "data": [
        {"queueNum":1,"registerId":7680,"registerTime":1376367849796,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"陈琦<?php echo (isset($_GET['page']) && $_GET['page'] != "") ? ($_GET['page'] - 1) * 15 + 1 : "1" ?>","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":2,"registerId":7681,"registerTime":1376367910318,"hospitalId":3,"caId":null,"officeId":1,"officeName":"通策综合办办公室","doctorId":1,"doctorName":null,"patientId":31,"patientName":"测试一个名字比较长的显示看看","patientAge":26,"patientSex":1,"callNum":38,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":3,"registerId":7682,"registerTime":1376367970426,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":323,"doctorName":null,"patientId":31,"patientName":"王菲","patientAge":6,"patientSex":0,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":4,"registerId":7683,"registerTime":1376368030593,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":4535,"doctorName":null,"patientId":31,"patientName":"进图","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":5,"registerId":7684,"registerTime":1376368090719,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":655,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":0,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":6,"registerId":7685,"registerTime":1376368150906,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":777,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":7,"registerId":7686,"registerTime":1376368210994,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"张灵甫","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":8,"registerId":7687,"registerTime":1376368271060,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":0,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":9,"registerId":7688,"registerTime":1376368331128,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":10,"registerId":7689,"registerTime":1376368391207,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":6,"registerId":7685,"registerTime":1376368150906,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":7,"registerId":7686,"registerTime":1376368210994,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"张灵甫","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":8,"registerId":7687,"registerTime":1376368271060,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":9,"registerId":7688,"registerTime":1376368331128,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":10,"registerId":7689,"registerTime":1376368391207,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null}
        ],"totalCount":"176","pageSize":"15","startIndex":"<?php echo (isset($_GET['page']) && $_GET['page'] != "") ? ($_GET['page'] - 1) * 15 + 1 : "1" ?>"
        }

        <?php
        break;
    case "getPatientDoneList":
        ?>
        { "data": [
        {"queueNum":1,"registerId":7680,"registerTime":1376367849796,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"未分诊<?php echo (isset($_GET['page']) && $_GET['page'] != "") ? ($_GET['page'] - 1) * 15 + 1 : "1" ?>","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":2,"registerId":7681,"registerTime":1376367910318,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":44,"doctorName":null,"patientId":31,"patientName":"王泽","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":3,"registerId":7682,"registerTime":1376367970426,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":666,"doctorName":null,"patientId":31,"patientName":"王菲","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":4,"registerId":7683,"registerTime":1376368030593,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":5654,"doctorName":"张亮亮","patientId":31,"patientName":"进图","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":5,"registerId":7684,"registerTime":1376368090719,"hospitalId":3,"caId":null,"officeId":1,"officeName":"名字最长的财务科","doctorId":454,"doctorName":null,"patientId":31,"patientName":"测试一个名字比较长的显示看看","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":6,"registerId":7685,"registerTime":1376368150906,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":767,"doctorName":null,"patientId":31,"patientName":"张林","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":7,"registerId":7686,"registerTime":1376368210994,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"张灵甫","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":8,"registerId":7687,"registerTime":1376368271060,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"豆豆","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":9,"registerId":7688,"registerTime":1376368331128,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"渔寮","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":5,"registerId":7684,"registerTime":1376368090719,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":6,"registerId":7685,"registerTime":1376368150906,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"张林","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":7,"registerId":7686,"registerTime":1376368210994,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"张灵甫","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":8,"registerId":7687,"registerTime":1376368271060,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"豆豆","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":9,"registerId":7688,"registerTime":1376368331128,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"渔寮","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":10,"registerId":7689,"registerTime":1376368391207,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"杜拉","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null}
        ],"totalCount":"154","pageSize":"15","startIndex":"<?php echo (isset($_GET['page']) && $_GET['page'] != "") ? ($_GET['page'] - 1) * 15 + 1 : "1" ?>"
        }
        <?php
        break;
    case "getPatientDoneOfDoctorList":
        ?>
        { "data": [
        {"queueNum":1,"registerId":7680,"registerTime":1376367849796,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"已分诊<?php echo (isset($_GET['page']) && $_GET['page'] != "") ? ($_GET['page'] - 1) * 15 + 1 : "1" ?>","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":2,"registerId":7681,"registerTime":1376367910318,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"王泽","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":3,"registerId":7682,"registerTime":1376367970426,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"王菲","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":4,"registerId":7683,"registerTime":1376368030593,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"进图","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":5,"registerId":7684,"registerTime":1376368090719,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"陈琦","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":6,"registerId":7685,"registerTime":1376368150906,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"张林","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":7,"registerId":7686,"registerTime":1376368210994,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"张灵甫","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":8,"registerId":7687,"registerTime":1376368271060,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"豆豆","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":9,"registerId":7688,"registerTime":1376368331128,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"渔寮","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null},
        {"queueNum":10,"registerId":7689,"registerTime":1376368391207,"hospitalId":3,"caId":null,"officeId":1,"officeName":"财务科","doctorId":null,"doctorName":null,"patientId":31,"patientName":"杜拉","patientAge":6,"patientSex":1,"callNum":0,"lastCallTime":null,"discountRate":null,"vipType":null}
        ],"totalCount":"154","pageSize":"15","startIndex":"<?php echo (isset($_GET['page']) && $_GET['page'] != "") ? ($_GET['page'] - 1) * 15 + 1 : "1" ?>"
        }
        <?php
        break;
    case "getDoctorList":
        ?>
        {"totalCount":291,"startIndex":<?php echo (isset($_GET['page']) && $_GET['page'] != "") ? ($_GET['page'] - 1) * 10 + 1 : "0" ?>,"pageSize":10,"data":[
        {"hospitalId":3,"caId":1,"officeId":1,"officeName":"财务科","doctorId":2,"doctorName":"Doct<?php echo (isset($_GET['page']) && $_GET['page'] != "") ? ($_GET['page'] - 1) * 10 + 1 : "1" ?>","doctorAvatar":"img/demo/head_pic01.jpg","userNum":"zhang3","assignedPatientCount":0},
        {"hospitalId":3,"caId":1,"officeId":1,"officeName":"财务科","doctorId":51,"doctorName":"李俏","doctorAvatar":"img/demo/head_pic01.jpg","userNum":"8301","assignedPatientCount":0},
        {"hospitalId":3,"caId":1,"officeId":1,"officeName":"财务科","doctorId":3,"doctorName":"li4","doctorAvatar":"img/demo/head_pic01.jpg","userNum":"li4","assignedPatientCount":0},
        {"hospitalId":3,"caId":1,"officeId":1,"officeName":"财务科","doctorId":4,"doctorName":"wang5","doctorAvatar":"img/demo/head_pic01.jpg","userNum":"wang5","assignedPatientCount":0},
        {"hospitalId":3,"caId":1,"officeId":1,"officeName":"财务科","doctorId":42,"doctorName":"陈峰","doctorAvatar":"img/demo/head_pic01.jpg","userNum":"8001","assignedPatientCount":0},
        {"hospitalId":3,"caId":1,"officeId":1,"officeName":"财务科","doctorId":43,"doctorName":"叶巧玲","doctorAvatar":"img/demo/head_pic01.jpg","userNum":"8002","assignedPatientCount":0},
        {"hospitalId":3,"caId":1,"officeId":1,"officeName":"财务科","doctorId":44,"doctorName":"孙超","doctorAvatar":"img/demo/head_pic01.jpg","userNum":"8003","assignedPatientCount":0},
        {"hospitalId":3,"caId":1,"officeId":1,"officeName":"财务科","doctorId":45,"doctorName":"郑丹瑜","doctorAvatar":"img/demo/head_pic01.jpg","userNum":"8004","assignedPatientCount":0},
        {"hospitalId":3,"caId":1,"officeId":1,"officeName":"财务科","doctorId":46,"doctorName":"冯忠节","doctorAvatar":"img/demo/head_pic01.jpg","userNum":"8007","assignedPatientCount":0},
        {"hospitalId":3,"caId":1,"officeId":1,"officeName":"财务科","doctorId":47,"doctorName":"韩静","doctorAvatar":"img/demo/head_pic01.jpg","userNum":"8092","assignedPatientCount":0}]}
        <?php
        break;
    case "getOfficeAndDoctorList":
        ?>
        [[{"officeId":"1","officeName":"正畸科"},
        {"officeId":"2","officeName":"牙周科"},
        {"officeId":"3","officeName":"儿童牙科"},
        {"officeId":"4","officeName":"种植科"},
        {"officeId":"5","officeName":"综合科"},
        {"officeId":"6","officeName":"特需科"},
        {"officeId":"7","officeName":"专家门诊"},
        {"officeId":"8","officeName":"美学修复科"},
        {"officeId":"9","officeName":"牙体牙髓科"},
        {"officeId":"10","officeName":"口腔外科"},
        {"officeId":"11","officeName":"口腔会所"},
        {"officeId":"12","officeName":"洁牙室"},
        {"officeId":"13","officeName":"放射科"},
        {"officeId":"14","officeName":"财务科"},
        {"officeId":"15","officeName":"行政"}],
        [{"officeId":"1","userId":"8","userName":"name8"},
        {"officeId":"1","userId":"25","userName":"name25"},
        {"officeId":"4","userId":"37","userName":"name37"},
        {"officeId":"4","userId":"39","userName":"name39"},
        {"officeId":"5","userId":"54","userName":"name54"},
        {"officeId":"5","userId":"65","userName":"name65"},
        {"officeId":"6","userId":"68","userName":"name68"},
        {"officeId":"7","userId":"69","userName":"name69"},
        {"officeId":"12","userId":"72","userName":"name72"},
        {"officeId":"12","userId":"140","userName":"name140"},
        {"officeId":"12","userId":"141","userName":"name141"},
        {"officeId":"12","userId":"209","userName":"name209"},
        {"officeId":"15","userId":"277","userName":"name277"},
        {"officeId":"15","userId":"278","userName":"name278"},{}]]
        <?php
        break;
    case "getOfficeAndPeopleList":
        ?>
        [[{"officeId":1,"officeName":"正畸科"},
        {"officeId":2,"officeName":"牙周科"},
        {"officeId":3,"officeName":"儿童牙科"},
        {"officeId":4,"officeName":"种植科"},
        {"officeId":5,"officeName":"综合科"},
        {"officeId":6,"officeName":"特需科"},
        {"officeId":7,"officeName":"专家门诊"},
        {"officeId":8,"officeName":"美学修复科"},
        {"officeId":9,"officeName":"牙体牙髓科"},
        {"officeId":10,"officeName":"口腔外科"},
        {"officeId":11,"officeName":"口腔会所"},
        {"officeId":12,"officeName":"洁牙室"},
        {"officeId":13,"officeName":"放射科"},
        {"officeId":14,"officeName":"财务科"},
        {"officeId":15,"officeName":"行政"}],
        [{"officeId":1,"userId":51,"userName":"李俏"},{"officeId":1,"userId":60,"userName":"高源"},{"officeId":1,"userId":80,"userName":"王文娟"},
        {"officeId":1,"userId":85,"userName":"王鹏越"},{"officeId":2,"userId":2,"userName":"zhang3"},{"officeId":2,"userId":3,"userName":"li4"},{"officeId":2,"userId":4,"userName":"wang5"},
        {"officeId":13,"userId":90,"userName":"王玉善"},{"officeId":13,"userId":91,"userName":"项陈洋"},{"officeId":13,"userId":92,"userName":"祝小鹏"},
        {"officeId":13,"userId":93,"userName":"杨敏超"},{"officeId":13,"userId":94,"userName":"孙超"},{"officeId":13,"userId":95,"userName":"郑丹瑜"},
        {"officeId":13,"userId":96,"userName":"王嘉涵"},{"officeId":13,"userId":97,"userName":"陈峰"},{"officeId":13,"userId":98,"userName":"管理员"},
        {"officeId":13,"userId":99,"userName":"导医台"},{"officeId":13,"userId":100,"userName":"导医台1"},{"officeId":13,"userId":102,"userName":"放射科"},{"officeId":13,"userId":103,"userName":"何丹青"},
        {"officeId":13,"userId":105,"userName":"王亚赞"},{"officeId":13,"userId":106,"userName":"周静波"},{"officeId":14,"userId":97,"userName":"陈峰"}]]
        <?php
        break;
    case "getOfficesByCa":
        ?>[[{"caId":1,"caName":"第一诊区"},{"caId":9,"caName":"第二诊区"},{"caId":8,"caName":"第三诊区"},{"caId":7,"caName":"第四诊区"}],[{"caId":1,"officeId":2,"officeName":"财务科"},{"caId":1,"officeId":3,"officeName":"正畸科"},{"caId":9,"officeId":2,"officeName":"财务科"},{"caId":9,"officeId":5,"officeName":"种植科"},{"caId":8,"officeId":3,"officeName":"正畸科"},{"caId":8,"officeId":4,"officeName":"牙周科"},{"caId":7,"officeId":2,"officeName":"财务科"},{"caId":7,"officeId":3,"officeName":"正畸科"},{"caId":7,"officeId":4,"officeName":"牙周科"}]]
        <?php
        break;
    case "getCaAndOfficeList":
        ?>
        [
        [
        {
        "caId" : "1",
        "caName" : "第一诊区"
        },
        {
        "caId" : "2",
        "caName" : "第二诊区"
        },
        {
        "caId" : "3",
        "caName" : "第三诊区"
        },
        {
        "caId" : "4",
        "caName" : "第四诊区"
        }
        ],
        [
        {
        "caId" : "1",
        "officeId" : "us8",
        "officeName" : "name8"
        },
        {
        "caId" : "1",
        "officeId" : "1",
        "officeName" : "正畸科"
        },
        {
        "caId" : "1",
        "officeId" : "2",
        "officeName" : "牙周科"
        },
        {
        "caId" : "2",
        "officeId" : "3",
        "officeName" : "儿童牙科"
        },
        {
        "caId" : "3",
        "officeId" : "4",
        "officeName" : "种植科"
        },
        {
        "caId" : "4",
        "officeId" : "10",
        "officeName" : "口腔外科"
        },
        {
        }
        ]
        ]
        <?php
        break;
    case "getCallTempalte":
        ?>{"totalCount":4,"startIndex":0,"pageSize":null,"data":[{"callTemplateId":3,"hospitalId":3,"templateContent":"${患者姓名}请到分诊台","createUser":1,"extjson":null,"extdb":null,"extnosql":null,"createTime":1373284645884,"modifyTime":null},{"callTemplateId":4,"hospitalId":3,"templateContent":"${诊区}的${患者姓名}请到${医生姓名}","createUser":1,"extjson":null,"extdb":null,"extnosql":null,"createTime":1373284646318,"modifyTime":null},{"callTemplateId":5,"hospitalId":3,"templateContent":"请勿喧哗","createUser":1,"extjson":null,"extdb":null,"extnosql":null,"createTime":1373284646375,"modifyTime":null},{"callTemplateId":7,"hospitalId":3,"templateContent":"ba","createUser":2,"extjson":null,"extdb":null,"extnosql":null,"createTime":1375790778622,"modifyTime":1375790782932}]}
        <?php
        break;
    /**
     *  {
    “status” : 0,         // 0-成功，其他值-错误
    “errorMsg” : “xxx”   // 错误消息
    }

     */
    case "getSuccessResponseStatusAndErrorMsg":
        ?>
        {
        "status": 0,
        "errorMsg": "执行成功！"
        }
        <?php
        break;
    case "getFailedResponseStatusAndErrorMsg":
        ?>
        {
        "status": 2,
        "errorMsg": "执行出错，status=2"
        }
        <?php
        break;
    case "getAutoCompleteData":
        // usage-- 用法；dosage-- 用量；frequency-- 频率；data-isEnableStock--是否启用库存
/*
*/
        ?>

var dataSource = [
        { uuid: "1001", py: "XxTEFJN", wb: "XGAT", zdy: "CCC", zhname: "杏香兔耳风胶囊", price: "14.56", unit: "盒", category: "甲", spec: "24颗/盒", allowDiscount: "0" ,"stocks":"12","frequency":"每天两次","usage":"外敷","dosage":"每次三粒","data-isEnableStock":"1"},
        { uuid: "1005", py: "XBDPHSP", wb: "GDBC", zdy: "AAA", zhname: "硝苯地平缓释片", price: "11.25", unit: "片", category: "甲", spec: "36颗/盒", allowDiscount: "1","stocks":"11","frequency":"","usage":"外敷","dosage":"每次三粒","data-isEnableStock":"1"},
        { uuid: "4301", py: "HQFZJJP", wb: "XGDY", zdy: "DBC", zhname: "红芪扶正咀嚼片", price: "34.28", unit: "片", category: "丙", spec: "12颗/盒", allowDiscount: "0" ,"stocks":"19" ,"frequency":"每天两次","usage":"口服","dosage":"","data-isEnableStock":"1"},
        { uuid: "8459", py: "YSZYFSXJN", wb: "DDHC", zdy: "DGE", zhname: "盐酸左氧氟沙星胶囊", price: "38.02", unit: "盒", category: "乙", spec: "24颗/盒", allowDiscount: "1" ,"stocks":"6","frequency":"每天两次","usage":"","dosage":"每次三粒","data-isEnableStock":"0"},
        { uuid: "9453", py: "TZFRJJN", wb: "HFUU", zdy: "123", zhname: "通滞苏润江胶囊", price: "25.00", unit: "盒", category: "甲", spec: "24颗/盒", allowDiscount: "0" ,"stocks":"3" ,"frequency":"每天两次","usage":"外敷","dosage":"","data-isEnableStock":"1"},
        { uuid: "9857", py: "YFZKJN", wb: "NHDF", zdy: "DGH", zhname: "益肺止咳胶囊", price: "27.98", unit: "盒", category: "甲", spec: "6颗/盒", allowDiscount: "1","stocks":"1" ,"frequency":"每天两次","usage":"","dosage":"每次三粒","data-isEnableStock":"0"}
        ];


        <?php
        break;
    case "getDispensaryAutoCompleteData":
        ?>
        var dataSource = [
        {"medicineId":"45","medicineCode":"1036","medicineSpell":"BLFHSJN(FBD）","specification":"0.3g*20","fivePen":" ","userDefineCode":" ","medicineName":"布洛芬缓释胶囊(芬必得）","retailPrice":"15.3000","wholesalePrice":"13.24","unitName":"克","medicareType":"1","areaName":" ","batchNo":"20130711","storageNum":"200","childId":"67","medicineCode":"0006","expireDate":"2013-11-08"},
        {"medicineId":"44","medicineCode":"1035","medicineSpell":"BLFHSJN","specification":"0.3g*20#","fivePen":" ","userDefineCode":" ","medicineName":"布洛芬缓释胶囊","retailPrice":"12.6000","wholesalePrice":"13.37","unitName":"克","medicareType":"1","areaName":" ","batchNo":"20130711","storageNum":"100","childId":"66","medicineCode":"0006","expireDate":"2013-12-08"},
        {"medicineId":"3","medicineCode":"xns","medicineSpell":"tb","specification":"30","fivePen":" ","userDefineCode":" ","medicineName":"血宁栓","retailPrice":"21.0000","wholesalePrice":" ","unitName":"克","medicareType":"1","areaName":" ","batchNo":"2013071201","storageNum":"200","childId":"65","medicineCode":"0006","expireDate":"2015-11-08"},
        {"medicineId":"5","medicineCode":"amxl","medicineSpell":"tb","specification":"15","fivePen":" ","userDefineCode":" ","medicineName":"阿姆西林","retailPrice":"28.0000","wholesalePrice":" ","unitName":"克","medicareType":"1","areaName":" ","batchNo":"2013071201","storageNum":"200","childId":"64","medicineCode":"0006","expireDate":"2026-11-08"},
        {"medicineId":"4","medicineCode":"yfsx","medicineSpell":"tb","specification":"10mg","fivePen":" ","userDefineCode":" ","medicineName":"氧氟沙星","retailPrice":"34.0000","wholesalePrice":" ","unitName":"克","medicareType":"1","areaName":" ","batchNo":"2013071201","storageNum":"200","childId":"63","medicineCode":"0006","expireDate":"2023-11-08"},
        {"medicineId":"3","medicineCode":"xns","medicineSpell":"tb","specification":"30","fivePen":" ","userDefineCode":" ","medicineName":"血宁栓","retailPrice":"22.0000","wholesalePrice":" ","unitName":" ","medicareType":"1","areaName":" ","batchNo":"21213222","storageNum":"100","childId":"62","medicineCode":"0006","expireDate":"2013-01-08"},
        {"medicineId":"5","medicineCode":"amxl","medicineSpell":"tb","specification":"15","fivePen":" ","userDefineCode":" ","medicineName":"阿姆西林","retailPrice":"24.6000","wholesalePrice":" ","unitName":" ","medicareType":"1","areaName":" ","batchNo":"21213222","storageNum":"100","childId":"61","medicineCode":"0006","expireDate":"2013-11-09"},
        {"medicineId":"4","medicineCode":"yfsx","medicineSpell":"tb","specification":"10mg","fivePen":" ","userDefineCode":" ","medicineName":"氧氟沙星","retailPrice":"21.3000","wholesalePrice":" ","unitName":" ","medicareType":"1","areaName":" ","batchNo":"21213222","storageNum":"100","childId":"60","medicineCode":"0006","expireDate":"2013-11-28"}
        ];




        <?php
        break;
    case "uploadtmp": //上传临时图片
        $file = 'uploadtmp.jpg';
        @move_uploaded_file($_FILES['Filedata']['tmp_name'], $file);
        //$rs['status'] = 1;
        $rs['status'] = "1|aaa.jpg|aaa.jpg";
        $rs['url'] = '../uploads/' . $file;
        print json_encode($rs);
    case "uploadavatar": //上传切头像
        $input = file_get_contents('php://input');
        $data = explode('--------------------', $input);
        @file_put_contents('../uploads/avatar_1.jpg', $data[0]);
        @file_put_contents('../uploads/avatar_2.jpg', $data[1]);
        //$rs['status'] = 1;

        //三个字段的说明: 第一个字段返回状态码，第二个字段为绝对路径显示用，第三个路径为相对路径保存用
        $rs['status'] = "1|./uploads/avatar_1.jpg|./uploads/avatar_1.jpg";
        print json_encode($rs);
    case "getArrearFlag":
        ?>
        {
        "result": 0
        }
        <?php
        break;
    case "chargeRepay":
        ?>
        {
        "result": 1,
        "message":"test"
        }
        <?php
        break;
    case "confirmFilm":
        ?>
        {
        "status": 0,
        "msg":"拍片确认完成",
        "errorMsg":"拍片确认失败",
        "data":{"radiateStatus":"已拍片","date":"18:27"}
        }
        <?php
        break;
    case "getStatHospital":
        ?>
        [{
        "hospitalId": "1",
        "hospitalName":"医院1"
        }, {
        "hospitalId": "2",
        "hospitalName":"医院2"
        }]
        <?php
        break;
    case "getStatDoctor":
        if($_REQUEST['hospitalId'] == '1'){
        ?>
        [{
        "userId": "1",
        "userName":"医生1"
        }, {
        "userId": "2",
        "userName":"医生2"
        }]
        <?php
        }
        else{
        ?>
        [{
        "userId": "3",
        "userName":"医生3"
        }, {
        "userId": "4",
        "userName":"医生4"
        }]
        <?php
        }
        break;
    case "getOfficeAndCa":
        ?>
        [[{"officeId":6,"officeName":"正畸科"},{"officeId":8,"officeName":"儿童科室"},{"officeId":9,"officeName":"放射科"},{"officeId":13,"officeName":"前台"},{"officeId":14,"officeName":"VIP科室"},{"officeId":15,"officeName":"综合科室"},{"officeId":11,"officeName":"药房"},{"officeId":10,"officeName":"消毒中心"},{"officeId":16,"officeName":"test"}],[{"officeId":6,"caId":1,"caName":"默认诊区"}]]
        <?php
        break;
    case "getSkipNo":

        ?>
        {
        "status": 0,
        "result":"<?php echo rand(10000,99999);?>",
        "errorMsg":"拍片确认失败",
        "msg":"成功信息"
        }
        <?php
        break;
    case "getBookList":
        if($_REQUEST['doctorId'] == '54'){
            ?>
            [
            {"appointmentName":"7:55","timeNode":"7:55","appointmentLog":0},
            {"appointmentName":"8:5","timeNode":"8:5","appointmentLog":0},
            {"appointmentName":"8:55","timeNode":"8:55","appointmentLog":0},
            {"appointmentName":"9:5","timeNode":"9:5","appointmentLog":0},
            {"appointmentName":"9:1千代 已约","timeNode":"9:15","appointmentLog":1},
            {"appointmentName":"9:25","timeNode":"9:25","appointmentLog":0},
            {"appointmentName":"9:35","timeNode":"9:35","appointmentLog":0},
            {"appointmentName":"20:5","timeNode":"20:5","appointmentLog":0}]
            <?php
        }
        else{
            ?>
            [{"appointmentName":"7:45","timeNode":"7:45","appointmentLog":0},
            {"appointmentName":"7:55","timeNode":"7:55","appointmentLog":0},
            {"appointmentName":"9:45周晓珍 已约","timeNode":"9:45","appointmentLog":1},
            {"appointmentName":"20:5","timeNode":"20:5","appointmentLog":0}]
            <?php
        }
        break;
    /**
     * 根据Vip卡号得到折扣
     *
     * 请求参数：
     * patientType
     * cardNum
     *
     * 响应参数：
     * status
     * data-（viprate，discountChargeSum）
     * viprate: 折扣率
     * discountChargeSum: 需要支付金额
     *
     */
    case "getDiscountByVipCard":
        ?>
        {
        "status": "0",
        "data":{
            "viprate":"0.8",
            "discountChargeSum":"<?php echo rand(1000,9999);?>",
            "vipcard":{
                "memberCardPwd":"123",
                "customerName" :"test",
                "customerMobi":"123456",
                "customerType":"2",
                "customerTypeName": "金卡",
                "discountRate": "0.8",
                "accountCharge":"88.8",
                "accountPoint":"88"
            }
        },
        "msg":"错误的卡号"
        }
        <?php
        break;
    /**
     * 根据金额得到系统的金额
     * 请求参数：
     * discountRate 折扣率从 0.01-0.99
     * elemType 页面上获取
     * patientId, 页面上获取
     * childId, 页面上获取
     * patientType,患者类型
     *
     * 响应参数：
     * status
     * data-（viprate，discountChargeSum）
     * viprate: 折扣率
     * discountChargeSum: 需要支付金额 如： 75.5710000000000121644916362129151821136474609375
     *
     */
    case "getSystemSum":

        ?>
        {
        "status": "0",
        "data":{
            "viprate":"0.8",
            "discountChargeSum":"<?php echo rand(10000,99999);?>"
        },
        "msg":null
        }

        <?php
        break;
    /**
     * 基本上和getSystemSum一致，可以合并，先保留
     */
    case "getChangeType":

        ?>
        {
        "status": "0",
        "data":{
        "discountChargeSum":"<?php echo rand(10000,99999);?>"
        }
        }

        <?php
        break;





    case "getDiagnoses":

        ?>
var dataSources =[[{"id":"1","name":"淀粉样性(葡萄牙型)多神经病","code":"DFYX(PTY"},{"id":"2","name":"齿音发育不清","code":"CYFYBQ"},{"id":"3","name":"牙弓中线偏离","code":"YGZXPL"},{"id":"4","name":"前牙反咬合","code":"QYFYH"},{"id":"5","name":"前牙开","code":"QYK"},{"id":"6","name":"牙弓关系异常","code":"YGGXYC"},{"id":"7","name":"下颌牙齿后部舌侧合","code":"XGYCHBSC"},{"id":"8","name":"牙齿错位","code":"YCCW"},{"id":"9","name":"牙列不齐","code":"YLBQ"},{"id":"10","name":"牙拥挤","code":"YYJ"},{"id":"11","name":"牙扭转","code":"YNZ"},{"id":"12","name":"牙间隙异常","code":"YJXYC"},{"id":"13","name":"错齿(咬合不正)","code":"CC(YHBZ)"},{"id":"14","name":"其他牙面畸形","code":"QTYMJX"},{"id":"15","name":"牙面畸形 NOS","code":"YMJX NOS"},{"id":"16","name":"全身性疾病引起的牙齿脱落","code":"QSXJBYQD"},{"id":"17","name":"后天性牙齿缺失","code":"HTXYCQS"},{"id":"18","name":"齿槽嵴萎缩","code":"CCJWS"},{"id":"19","name":"齿槽突萎缩","code":"CCTWS"},{"id":"20","name":"牙缺损牙槽嵴萎缩","code":"YQSYCJWS"},{"id":"21","name":"残留齿根","code":"CLCG"},{"id":"22","name":"齿槽突不齐","code":"CCTBQ"},{"id":"23","name":"齿槽突裂","code":"CCTL"},{"id":"24","name":"牙槽出血","code":"YCCX"},{"id":"25","name":"牙槽嵴裂","code":"YCJL"},{"id":"26","name":"牙槽嵴裂隙","code":"YCJLX"},{"id":"27","name":"牙痛","code":"YT"},{"id":"28","name":"牙齿及支持结构的疾患 NOS","code":"YCJZCJGD"},{"id":"29","name":"颌含牙囊肿","code":"GHYNZ"},{"id":"30","name":"颌骨牙源性囊肿","code":"GGYYXNZ"},{"id":"31","name":"牙龈囊肿","code":"YKNZ"},{"id":"32","name":"口腔表皮样囊肿","code":"KQBPYNZ"},{"id":"33","name":"口腔皮样囊肿","code":"KQPYNZ"},{"id":"34","name":"口腔粘液腺囊肿","code":"KQZYXNZ"},{"id":"35","name":"颌骨非牙源性上皮样囊肿","code":"GGFYYXSP"},{"id":"36","name":"口腔囊肿 NOS","code":"KQNZ NOS"},{"id":"37","name":"齿槽骨炎","code":"CCGY"},{"id":"38","name":"复发性阿弗他(口腔)溃疡","code":"FFXAFT(K"},{"id":"39","name":"口腔感染","code":"KQGR"},{"id":"40","name":"口腔炎性肿块","code":"KQYXZK"},{"id":"41","name":"口腔炎","code":"KQY"},{"id":"42","name":"义齿性口炎","code":"YCXKY"},{"id":"43","name":"口腔瘘管","code":"KQLG"},{"id":"44","name":"口腔内脓肿","code":"KQNNZ"},{"id":"45","name":"牙源性面部皮肤瘘管","code":"YYXMBPFL"},{"id":"46","name":"口腔粘膜白斑症","code":"KQZMBBZ"},{"id":"47","name":"口腔粘膜恶性肉芽肿","code":"KQZMEXRY"},{"id":"48","name":"口腔粘膜肉芽肿","code":"KQZMRYZ"},{"id":"49","name":"口腔粘膜的疣状黄瘤","code":"KQZMDYZH"},{"id":"50","name":"口腔粘膜的嗜酸性肉芽肿","code":"KQZMDSSX"},{"id":"51","name":"口腔粘膜纤维变性","code":"KQZMXWBX"},{"id":"52","name":"口腔粘膜增生","code":"KQZMZS"},{"id":"53","name":"口腔粘膜刺激性增生","code":"KQZMCJXZ"},{"id":"54","name":"口腔内血管增生","code":"KQNXGZS"},{"id":"55","name":"口腔粘膜出血","code":"KQZMCX"},{"id":"56","name":"口腔肿物","code":"KQZW"},{"id":"57","name":"复发性口腔溃疡","code":"FFXKQKY"},{"id":"58","name":"口腔粘膜病","code":"KQZMB"},{"id":"59","name":"口腔粘膜溃疡","code":"KQZMKY"},{"id":"60","name":"口腔粘膜良性过度角化病[口腔厚上症]","code":"KQZMLXGD"},{"id":"61","name":"口腔粘膜血肿[创伤性血肿]","code":"KQZMXZ[C"},{"id":"62","name":"口腔上颌窦瘘","code":"KQSGDL"},{"id":"63","name":"牙齿发育不全","code":"YCFYBQ"},{"id":"64","name":"牙齿缺少","code":"YCQS"},{"id":"65","name":"多生齿","code":"DSC"},{"id":"66","name":"鼻腔牙[异位牙额外齿]","code":"BQY[YWYE"},{"id":"67","name":"巨齿","code":"JC"},{"id":"68","name":"磨牙旁额外牙结节","code":"MYPEWYJJ"},{"id":"69","name":"长冠牙","code":"CGY"},{"id":"70","name":"钉状牙","code":"DZY"},{"id":"71","name":"小牙","code":"XY"},{"id":"72","name":"前突牙","code":"QTY"},{"id":"73","name":"结合牙","code":"JHY"},{"id":"74","name":"融合牙","code":"RHY"},{"id":"75","name":"双生牙","code":"SSY"},{"id":"76","name":"斑釉病(症)[氟斑牙、黄斑牙]","code":"BYB(Z)[F"},{"id":"77","name":"牙骨质缺失和发育不全","code":"YGZQSHFY"},{"id":"78","name":"弯曲牙","code":"WQY"},{"id":"79","name":"区域性牙体发育异常","code":"QYXYTFYY"},{"id":"80","name":"特纳牙","code":"TNY"},{"id":"81","name":"牙发生不全","code":"YFSBQ"},{"id":"82","name":"牙釉质发生不全","code":"YYZFSBQ"},{"id":"83","name":"牙本质发育不全","code":"YBZFYBQ"},{"id":"84","name":"壳状牙","code":"KZY"},{"id":"85","name":"乳牙早发","code":"RYZF"},{"id":"86","name":"初齿过早[乳牙]脱落","code":"CCGZ[RY]"},{"id":"87","name":"牙过早萌出","code":"YGZMC"},{"id":"88","name":"保留[滞留]初齿","code":"BL[ZL]CC"},{"id":"89","name":"出牙综合征","code":"CYZHZ"},{"id":"90","name":"牙齿形成期间颜色改变","code":"YCXCQJYS"},{"id":"91","name":"牙齿内在染色","code":"YCNZRS"},{"id":"92","name":"牙发生疾患","code":"YFSJH"},{"id":"93","name":"埋伏牙","code":"MFY"},{"id":"94","name":"阻生齿","code":"ZSC"},{"id":"95","name":"牙白斑损害","code":"YBBSH"},{"id":"96","name":"牙釉质龋","code":"YYZQ"},{"id":"97","name":"牙本质龋","code":"YBZQ"},{"id":"98","name":"牙骨质龋","code":"YGZQ"},{"id":"99","name":"牙折断","code":"YZD"},{"id":"100","name":"黑牙折断","code":"HYZD"},{"id":"101","name":"其他龋齿","code":"QTQC"},{"id":"102","name":"龋齿","code":"QC"},{"id":"103","name":"牙齿的邻面磨损","code":"YCDLMMS"},{"id":"104","name":"牙齿楔状缺损","code":"YCXZQS"},{"id":"105","name":"传统性牙齿磨损","code":"CTXYCMS"},{"id":"106","name":"宗教仪式性牙齿磨损","code":"ZJYSXYCM"},{"id":"107","name":"职业性牙齿磨损","code":"ZYXYCMS"},{"id":"108","name":"习惯性牙齿磨损","code":"XGXYCMS"},{"id":"109","name":"净齿剂牙齿磨损","code":"JCJYCMS"},{"id":"110","name":"牙齿腐蚀","code":"YCFS"},{"id":"111","name":"职业性牙齿腐蚀","code":"ZYXYCFS"},{"id":"112","name":"特发性牙齿腐蚀","code":"TFXYCFS"},{"id":"113","name":"持续性呕吐引起的牙齿腐蚀","code":"CXXOTYQD"},{"id":"114","name":"药物和药剂引起的牙齿腐蚀","code":"YWHYJYQD"},{"id":"115","name":"饮食引起的牙齿腐蚀","code":"YSYQDYCF"},{"id":"116","name":"牙髓内部肉芽肿","code":"YSNBRYZ"},{"id":"117","name":"牙齿吸收","code":"YCXS"},{"id":"118","name":"牙骨质增生","code":"YGZZS"},{"id":"119","name":"骨牙粘连","code":"GYZL"},{"id":"120","name":"牙齿沉积物","code":"YCCJW"},{"id":"121","name":"龈上牙石","code":"KSYS"},{"id":"122","name":"龈下牙石","code":"KXYS"},{"id":"123","name":"辐射性牙釉质","code":"FSXYYZ"},{"id":"124","name":"牙齿敏感症(牙本质过敏)","code":"YCMGZ(YB"},{"id":"125","name":"牙齿硬组织疾病 NOS","code":"YCYZZJB "},{"id":"126","name":"化脓性牙髓炎","code":"HNXYSY"},{"id":"127","name":"急性牙髓炎","code":"JXYSY"},{"id":"128","name":"慢性牙髓炎","code":"MXYSY"},{"id":"129","name":"牙髓脓肿","code":"YSNZ"},{"id":"130","name":"牙髓炎","code":"YSY"},{"id":"131","name":"牙脓肿","code":"YNZ"},{"id":"132","name":"牙髓息肉","code":"YSXR"},{"id":"133","name":"牙髓坏死","code":"YSHS"},{"id":"134","name":"牙髓变性","code":"YSBX"},{"id":"135","name":"不规则牙本质病","code":"BGZYBZB"},{"id":"136","name":"急性根尖牙周炎","code":"JXGJYZY"},{"id":"137","name":"根尖牙周炎","code":"GJYZY"},{"id":"138","name":"慢性根尖牙周炎","code":"MXGJYZY"},{"id":"139","name":"牙根肉芽肿","code":"YGRYZ"},{"id":"140","name":"牙槽脓肿","code":"YCNZ"},{"id":"141","name":"牙髓疾患 NOS","code":"YSJH NOS"},{"id":"142","name":"增生性牙龈炎","code":"ZSXYKY"},{"id":"143","name":"化脓性牙龈炎","code":"HNXYKY"},{"id":"144","name":"牙龈炎","code":"YKY"},{"id":"145","name":"慢性牙龈炎","code":"MXYKY"},{"id":"146","name":"龈口炎，白色皱襞性(口腔遗传性疾病)","code":"KKY，BSZ"},{"id":"147","name":"牙冠周脓肿","code":"YGZNZ"},{"id":"148","name":"牙龈脓肿","code":"YKNZ"},{"id":"149","name":"牙周脓肿","code":"YZNZ"},{"id":"150","name":"牙周感染","code":"YZGR"},{"id":"151","name":"牙周炎","code":"YZY"},{"id":"152","name":"慢性牙周炎","code":"MXYZY"},{"id":"153","name":"齿槽脓溢(边缘性牙周炎)[里格斯病]","code":"CCNY(BYX"},{"id":"154","name":"牙周变性","code":"YZBX"},{"id":"155","name":"牙周病","code":"YZB"},{"id":"156","name":"牙创伤症(牙周创伤或咬颌创伤)","code":"YCSZ(YZC"},{"id":"157","name":"牙龈退缩","code":"YKTS"},{"id":"158","name":"牙龈增生","code":"YKZS"},{"id":"159","name":"牙龈纤维瘤病","code":"YKXWLB"},{"id":"160","name":"无牙牙槽嵴刺激性增生","code":"WYYCJCJX"},{"id":"161","name":"牙龈出血","code":"YKCX"},{"id":"162","name":"牙龈溃疡","code":"YKKY"},{"id":"163","name":"牙龈瘤","code":"YKL"},{"id":"164","name":"牙龈瘘管","code":"YKLG"},{"id":"165","name":"牙龈息肉","code":"YKXR"},{"id":"166","name":"纤维性牙龈瘤[牙龈象皮病]","code":"XWXYKL[Y"},{"id":"167","name":"牙龈痛","code":"YKT"},{"id":"168","name":"牙周巨细胞性肉芽肿","code":"YZJXBXRY"},{"id":"169","name":"后牙反咬合","code":"HYFYH"},{"id":"170","name":"齿突骨折","code":"CTGZ"},{"id":"171","name":"派－乐二氏综合征[手足掌角化；牙齿脱落综合征]","code":"P－LESZH"},{"id":"172","name":"口腔浅表损伤","code":"KQQBSS"},{"id":"173","name":"牙龈裂伤","code":"YKLS"},{"id":"174","name":"口腔开放性伤口","code":"KQKFXSK"},{"id":"175","name":"创伤性牙折断","code":"CSXYZD"},{"id":"176","name":"牙槽骨(齿槽)骨折","code":"YCG(CC)G"},{"id":"177","name":"牙槽开放性骨折","code":"YCKFXGZ"},{"id":"178","name":"创伤性牙齿脱落","code":"CSXYCTL"},{"id":"179","name":"航空牙痛","code":"HKYT"},{"id":"180","name":"拔牙创口出血","code":"BYCKCX"},{"id":"181","name":"局部应用的牙科药物","code":"JBYYDYKY"},{"id":"182","name":"口腔损伤的后遗症","code":"KQSSDHYZ"},{"id":"183","name":"牙科检查","code":"YKJC"},{"id":"184","name":"牙疾患的特殊筛选检查","code":"YJHDTSSX"},{"id":"185","name":"假牙装置的安装和调整","code":"JYZZDAZH"},{"id":"186","name":"正牙装置的安装和调整","code":"ZYZZDAZH"},{"id":"187","name":"牙根和下颌骨植入物","code":"YGHXGGZR"},{"id":"188","name":"具有人工假牙装置(完全)(部分)","code":"JYRGJYZZ"},{"id":"189","name":"牙外科正畸术后","code":"YWKZJSH"},{"id":"190","name":"拔乳牙","code":"BRY"},{"id":"191","name":"齿钳拨牙  ＮＯＳ","code":"CQBY  NO"},{"id":"192","name":"残留牙根拔除术","code":"CLYGBCS"},{"id":"193","name":"阻生牙拔除术","code":"ZSYBCS"},{"id":"194","name":"阻生智齿拨除术","code":"ZSZCBCS"},{"id":"195","name":"手术性拨牙","code":"SSXBY"},{"id":"196","name":"牙填充修补术","code":"YTCXBS"},{"id":"197","name":"牙嵌体修补术","code":"YQTXBS"},{"id":"198","name":"安装人工齿冠","code":"AZRGCG"},{"id":"199","name":"牙植入术","code":"YZRS"},{"id":"200","name":"义齿骨内植入","code":"YCGNZR"},{"id":"201","name":"牙槽切开术","code":"YCQKS"},{"id":"202","name":"牙龈活组织检查","code":"YKHZZJC"},{"id":"203","name":"牙槽活组织检查","code":"YCHZZJC"},{"id":"204","name":"骨或软组织移植物齿龈成形术","code":"GHRZZYZW"},{"id":"205","name":"牙周损害切除术","code":"YZSHQCS"},{"id":"206","name":"牙龈肿瘤切除术","code":"YKZLQCS"},{"id":"207","name":"牙龈缝合术","code":"YKFHS"},{"id":"208","name":"牙龈成形术","code":"YKCXS"},{"id":"209","name":"牙槽肿瘤切除术","code":"YCZLQCS"},{"id":"210","name":"牙囊肿摘除术","code":"YNZZCS"},{"id":"211","name":"牙槽切除术","code":"YCQCS"},{"id":"212","name":"牙槽修补术","code":"YCXBS"},{"id":"213","name":"牙槽整形术","code":"YCZXS"},{"id":"214","name":"齿槽骨修正术","code":"CCGXZS"},{"id":"215","name":"齿咬合调整","code":"CYHDZ"},{"id":"216","name":"口腔粘膜损害切除术","code":"KQZMSHQC"},{"id":"217","name":"全口内牙齿Ｘ线检查","code":"QKNYCXXJ"},{"id":"218","name":"牙根管Ｘ线检查","code":"YGGXXJC"},{"id":"219","name":"口腔粘膜检查","code":"KQZMJC"},{"id":"220","name":"牙周检查","code":"YZJC"},{"id":"221","name":"牙齿钢丝栓结术","code":"YCGSSJS"},{"id":"222","name":"齿槽骨折开放性复位术","code":"CCGZKFXF"},{"id":"223","name":"装配托牙","code":"ZPTY"},{"id":"224","name":"牙斑去除","code":"YBQC"},{"id":"225","name":"牙齿填塞物置换","code":"YCTSWZH"},{"id":"226","name":"去除牙齿栓结","code":"QCYCSJ"},{"id":"227","name":"去除牙齿填塞物","code":"QCYCTSW"},{"id":"228","name":"去除假牙","code":"QCJY"},{"id":"229","name":"从口腔夹除腔内异物","code":"CKQJCQNY"},{"id":"230","name":"良性牙(齿)源性瘤 (D16.4，D16.5)","code":"LXY(C)YX"},{"id":"231","name":"牙(齿)源性瘤 NOS (D48.0)","code":"Y(C)YXL "},{"id":"232","name":"恶性牙(齿)源性瘤 (C41.0，C41.1)","code":"EXY(C)YX"},{"id":"233","name":"牙本质瘤 (D16.4，D16.5)","code":"YBZL (D1"},{"id":"234","name":"牙(齿)骨质瘤 NOS (D16.4，D16.5)","code":"Y(C)GZL "},{"id":"235","name":"良性成牙(齿)骨质(母)细胞瘤 (D16.4，D16.5)","code":"LXCY(C)G"},{"id":"236","name":"牙(齿)骨质化性纤维瘤 (D16.4，D16.5)","code":"Y(C)GZHX"},{"id":"237","name":"巨形牙(齿)骨骨质瘤 (D16.4，D16.5)","code":"JXY(C)GG"},{"id":"238","name":"牙瘤 NOS (D16.4，D16.5)","code":"YL NOS ("},{"id":"239","name":"混合性牙(齿)瘤 (D16.4，D16.5)","code":"HHXY(C)L"},{"id":"240","name":"复合性牙(齿)瘤 (D16.4，D16.5)","code":"FHXY(C)L"},{"id":"241","name":"成釉(母)细胞纤维牙(齿)瘤","code":"CY(M)XBX"},{"id":"242","name":"成釉(母)细胞牙(齿)肉瘤 (C41.0，C41.1)","code":"CY(M)XBY"},{"id":"243","name":"腺瘤样牙(齿)源性瘤 (D16.4，D16.5)","code":"XLYY(C)Y"},{"id":"244","name":"钙化性牙(齿)源性囊肿 (D16.4，D16.5)","code":"GHXY(C)Y"},{"id":"245","name":"牙源性形骸细胞瘤 (D16.4，D16.5)","code":"YYXXHXBL"},{"id":"246","name":"牙(齿)成釉细胞瘤 (D16.4，D16.5)","code":"Y(C)CYXB"},{"id":"247","name":"鳞状牙(齿)源性瘤 (D16.4，D16.5)","code":"LZY(C)YX"},{"id":"248","name":"牙(齿)源性粘液瘤 (D16.4，D16.5)","code":"Y(C)YXZY"},{"id":"249","name":"中心牙(齿)源性纤维瘤 (D16.4，D16.5)","code":"ZXY(C)YX"},{"id":"250","name":"周围牙(齿)源性纤维瘤 (D16.4，D16.5)","code":"ZWY(C)YX"},{"id":"251","name":"钙化上皮性牙源性瘤 (D16.4，D16.5)","code":"GHSPXYYX"},{"id":"252","name":"经口腔甲状腺切除术","code":"JKQJZXQC"},{"id":"253","name":"牙科表面用药引起的有害效应","code":"YKBMYYYQ"},{"id":"254","name":"齿衄病","code":"CNB"},{"id":"255","name":"口齿病（龋齿病）","code":"KCB（QCB"},{"id":"256","name":"牙痛病","code":"YTB"},{"id":"257","name":"牙痈病","code":"YYB"},{"id":"258","name":"牙痈病","code":"YYB"},{"id":"259","name":"牙宣病","code":"YXB"},{"id":"260","name":"锯齿缘离断","code":"JCYLD"},{"id":"261","name":"视网膜锯齿缘断离","code":"SWMJCYDL"},{"id":"262","name":"锯齿缘囊肿","code":"JCYNZ"},{"id":"263","name":"梅毒性牙(赫秦生氏牙)","code":"MDXY(HQS"},{"id":"264","name":"哈钦森牙(先天性梅毒)","code":"HQSY(XTX"},{"id":"265","name":"走马疳[口颊坏疽、走马牙疳]","code":"ZMG[KJHJ"},{"id":"266","name":"坏疽性口腔炎","code":"HJXKQY"},{"id":"267","name":"口腔原位癌","code":"KQYWA"},{"id":"268","name":"上颌骨齿原性恶性肿瘤","code":"SGGCYXEX"},{"id":"269","name":"下颌骨齿原性恶性肿瘤","code":"XGGCYXEX"},{"id":"270","name":"磨牙后区恶性肿瘤","code":"MYHQEXZL"},{"id":"271","name":"口腔交搭跨越的恶性肿瘤","code":"KQJDKYDE"},{"id":"272","name":"口腔恶性肿瘤 NOS","code":"KQEXZL N"},{"id":"273","name":"颊部，牙龈恶性肿瘤","code":"JB，YKEX"},{"id":"274","name":"唇、口腔和咽交搭跨越的恶性肿瘤","code":"C、KQHYJ"},{"id":"275","name":"糖尿病性牙周病","code":"TNBXYZB"},{"id":"276","name":"口腔内淋巴管瘤 (M91700/0)","code":"KQNLBGL "},{"id":"277","name":"口腔动态未定的肿瘤 (M80000/1)","code":"KQDTWDDZ"},{"id":"278","name":"口腔血管瘤 (M91200/0)","code":"KQXGL (M"},{"id":"279","name":"齿槽良性肿瘤","code":"CCLXZL"},{"id":"280","name":"口腔良性肿瘤","code":"KQLXZL"},{"id":"281","name":"牙龈良性肿瘤","code":"YKLXZL"},{"id":"282","name":"牙瘤 (M92800/0)","code":"YL (M928"},{"id":"283","name":"上颌骨非齿源性恶性肿瘤","code":"SGGFCYXE"},{"id":"284","name":"下颌骨非齿源性恶性肿瘤","code":"XGGFCYXE"},{"id":"285","name":"口腔继发性恶性肿瘤","code":"KQJFXEXZ"},{"id":"286","name":"上唇(内)口腔面恶性肿瘤","code":"SC(N)KQM"},{"id":"287","name":"下唇(内)口腔面恶性肿瘤","code":"XC(N)KQM"},{"id":"288","name":"唇(内)口腔面恶性肿瘤","code":"C(N)KQME"},{"id":"289","name":"上牙龈恶性肿瘤","code":"SYKEXZL"},{"id":"290","name":"下牙龈恶性肿瘤","code":"XYKEXZL"},{"id":"291","name":"牙龈恶性肿瘤 NOS","code":"YKEXZL N"},{"id":"292","name":"前磨牙与尖牙连接处以前恶性肿瘤","code":"QMYYJYLJ"},{"id":"293","name":"口腔粘膜恶性肿瘤","code":"KQZMEXZL"},{"id":"294","name":"口腔念珠菌感染(鹅口疮)","code":"KQNZJGR("},{"id":"295","name":"口腔苍白","code":"KQCB"},{"id":"296","name":"口腔霉菌感染","code":"KQMJGR"},{"id":"297","name":"牙龈结核","code":"YKJH"},{"id":"298","name":"直布罗陀热(西班牙)","code":"ZBLTR(XB"},{"id":"299","name":"口腔疱疹","code":"KQPZ"}]];


        <?php
        break;


    case "getDiagnosesData":
        ?>

var dataSources =
[
   {
      "id" : "1",
      "label" : "淀粉样性(葡萄牙型)多神经病",
      "value" : "DFYX(PTY"
   },
   {
      "id" : "2",
      "label" : "齿音发育不清",
      "value" : "CYFYBQ"
   },
   {
      "id" : "3",
      "label" : "牙弓中线偏离",
      "value" : "YGZXPL"
   },
   {
      "id" : "4",
      "label" : "前牙反咬合",
      "value" : "QYFYH"
   },
   {
      "id" : "5",
      "label" : "前牙开",
      "value" : "QYK"
   },
   {
      "id" : "6",
      "label" : "牙弓关系异常",
      "value" : "YGGXYC"
   },
   {
      "id" : "7",
      "label" : "下颌牙齿后部舌侧合",
      "value" : "XGYCHBSC"
   },
   {
      "id" : "8",
      "label" : "牙齿错位",
      "value" : "YCCW"
   },
   {
      "id" : "9",
      "label" : "牙列不齐",
      "value" : "YLBQ"
   },
   {
      "id" : "10",
      "label" : "牙拥挤",
      "value" : "YYJ"
   },
   {
      "id" : "11",
      "label" : "牙扭转",
      "value" : "YNZ"
   },
   {
      "id" : "12",
      "label" : "牙间隙异常",
      "value" : "YJXYC"
   },
   {
      "id" : "13",
      "label" : "错齿(咬合不正)",
      "value" : "CC(YHBZ)"
   },
   {
      "id" : "14",
      "label" : "其他牙面畸形",
      "value" : "QTYMJX"
   },
   {
      "id" : "15",
      "label" : "牙面畸形 NOS",
      "value" : "YMJX NOS"
   },
   {
      "id" : "16",
      "label" : "全身性疾病引起的牙齿脱落",
      "value" : "QSXJBYQD"
   },
   {
      "id" : "17",
      "label" : "后天性牙齿缺失",
      "value" : "HTXYCQS"
   },
   {
      "id" : "18",
      "label" : "齿槽嵴萎缩",
      "value" : "CCJWS"
   },
   {
      "id" : "19",
      "label" : "齿槽突萎缩",
      "value" : "CCTWS"
   },
   {
      "id" : "20",
      "label" : "牙缺损牙槽嵴萎缩",
      "value" : "YQSYCJWS"
   },
   {
      "id" : "21",
      "label" : "残留齿根",
      "value" : "CLCG"
   },
   {
      "id" : "22",
      "label" : "齿槽突不齐",
      "value" : "CCTBQ"
   },
   {
      "id" : "23",
      "label" : "齿槽突裂",
      "value" : "CCTL"
   },
   {
      "id" : "24",
      "label" : "牙槽出血",
      "value" : "YCCX"
   },
   {
      "id" : "25",
      "label" : "牙槽嵴裂",
      "value" : "YCJL"
   },
   {
      "id" : "26",
      "label" : "牙槽嵴裂隙",
      "value" : "YCJLX"
   },
   {
      "id" : "27",
      "label" : "牙痛",
      "value" : "YT"
   },
   {
      "id" : "28",
      "label" : "牙齿及支持结构的疾患 NOS",
      "value" : "YCJZCJGD"
   },
   {
      "id" : "29",
      "label" : "颌含牙囊肿",
      "value" : "GHYNZ"
   },
   {
      "id" : "30",
      "label" : "颌骨牙源性囊肿",
      "value" : "GGYYXNZ"
   },
   {
      "id" : "31",
      "label" : "牙龈囊肿",
      "value" : "YKNZ"
   },
   {
      "id" : "32",
      "label" : "口腔表皮样囊肿",
      "value" : "KQBPYNZ"
   },
   {
      "id" : "33",
      "label" : "口腔皮样囊肿",
      "value" : "KQPYNZ"
   },
   {
      "id" : "34",
      "label" : "口腔粘液腺囊肿",
      "value" : "KQZYXNZ"
   },
   {
      "id" : "35",
      "label" : "颌骨非牙源性上皮样囊肿",
      "value" : "GGFYYXSP"
   },
   {
      "id" : "36",
      "label" : "口腔囊肿 NOS",
      "value" : "KQNZ NOS"
   },
   {
      "id" : "37",
      "label" : "齿槽骨炎",
      "value" : "CCGY"
   },
   {
      "id" : "38",
      "label" : "复发性阿弗他(口腔)溃疡",
      "value" : "FFXAFT(K"
   },
   {
      "id" : "39",
      "label" : "口腔感染",
      "value" : "KQGR"
   },
   {
      "id" : "40",
      "label" : "口腔炎性肿块",
      "value" : "KQYXZK"
   },
   {
      "id" : "41",
      "label" : "口腔炎",
      "value" : "KQY"
   },
   {
      "id" : "42",
      "label" : "义齿性口炎",
      "value" : "YCXKY"
   },
   {
      "id" : "43",
      "label" : "口腔瘘管",
      "value" : "KQLG"
   },
   {
      "id" : "44",
      "label" : "口腔内脓肿",
      "value" : "KQNNZ"
   },
   {
      "id" : "45",
      "label" : "牙源性面部皮肤瘘管",
      "value" : "YYXMBPFL"
   },
   {
      "id" : "46",
      "label" : "口腔粘膜白斑症",
      "value" : "KQZMBBZ"
   },
   {
      "id" : "47",
      "label" : "口腔粘膜恶性肉芽肿",
      "value" : "KQZMEXRY"
   },
   {
      "id" : "48",
      "label" : "口腔粘膜肉芽肿",
      "value" : "KQZMRYZ"
   },
   {
      "id" : "49",
      "label" : "口腔粘膜的疣状黄瘤",
      "value" : "KQZMDYZH"
   },
   {
      "id" : "50",
      "label" : "口腔粘膜的嗜酸性肉芽肿",
      "value" : "KQZMDSSX"
   },
   {
      "id" : "51",
      "label" : "口腔粘膜纤维变性",
      "value" : "KQZMXWBX"
   },
   {
      "id" : "52",
      "label" : "口腔粘膜增生",
      "value" : "KQZMZS"
   },
   {
      "id" : "53",
      "label" : "口腔粘膜刺激性增生",
      "value" : "KQZMCJXZ"
   },
   {
      "id" : "54",
      "label" : "口腔内血管增生",
      "value" : "KQNXGZS"
   },
   {
      "id" : "55",
      "label" : "口腔粘膜出血",
      "value" : "KQZMCX"
   },
   {
      "id" : "56",
      "label" : "口腔肿物",
      "value" : "KQZW"
   },
   {
      "id" : "57",
      "label" : "复发性口腔溃疡",
      "value" : "FFXKQKY"
   },
   {
      "id" : "58",
      "label" : "口腔粘膜病",
      "value" : "KQZMB"
   },
   {
      "id" : "59",
      "label" : "口腔粘膜溃疡",
      "value" : "KQZMKY"
   },
   {
      "id" : "60",
      "label" : "口腔粘膜良性过度角化病[口腔厚上症]",
      "value" : "KQZMLXGD"
   },
   {
      "id" : "61",
      "label" : "口腔粘膜血肿[创伤性血肿]",
      "value" : "KQZMXZ[C"
   },
   {
      "id" : "62",
      "label" : "口腔上颌窦瘘",
      "value" : "KQSGDL"
   },
   {
      "id" : "63",
      "label" : "牙齿发育不全",
      "value" : "YCFYBQ"
   },
   {
      "id" : "64",
      "label" : "牙齿缺少",
      "value" : "YCQS"
   },
   {
      "id" : "65",
      "label" : "多生齿",
      "value" : "DSC"
   },
   {
      "id" : "66",
      "label" : "鼻腔牙[异位牙额外齿]",
      "value" : "BQY[YWYE"
   },
   {
      "id" : "67",
      "label" : "巨齿",
      "value" : "JC"
   },
   {
      "id" : "68",
      "label" : "磨牙旁额外牙结节",
      "value" : "MYPEWYJJ"
   },
   {
      "id" : "69",
      "label" : "长冠牙",
      "value" : "CGY"
   },
   {
      "id" : "70",
      "label" : "钉状牙",
      "value" : "DZY"
   },
   {
      "id" : "71",
      "label" : "小牙",
      "value" : "XY"
   },
   {
      "id" : "72",
      "label" : "前突牙",
      "value" : "QTY"
   },
   {
      "id" : "73",
      "label" : "结合牙",
      "value" : "JHY"
   },
   {
      "id" : "74",
      "label" : "融合牙",
      "value" : "RHY"
   },
   {
      "id" : "75",
      "label" : "双生牙",
      "value" : "SSY"
   },
   {
      "id" : "76",
      "label" : "斑釉病(症)[氟斑牙、黄斑牙]",
      "value" : "BYB(Z)[F"
   },
   {
      "id" : "77",
      "label" : "牙骨质缺失和发育不全",
      "value" : "YGZQSHFY"
   },
   {
      "id" : "78",
      "label" : "弯曲牙",
      "value" : "WQY"
   },
   {
      "id" : "79",
      "label" : "区域性牙体发育异常",
      "value" : "QYXYTFYY"
   },
   {
      "id" : "80",
      "label" : "特纳牙",
      "value" : "TNY"
   },
   {
      "id" : "81",
      "label" : "牙发生不全",
      "value" : "YFSBQ"
   },
   {
      "id" : "82",
      "label" : "牙釉质发生不全",
      "value" : "YYZFSBQ"
   },
   {
      "id" : "83",
      "label" : "牙本质发育不全",
      "value" : "YBZFYBQ"
   },
   {
      "id" : "84",
      "label" : "壳状牙",
      "value" : "KZY"
   },
   {
      "id" : "85",
      "label" : "乳牙早发",
      "value" : "RYZF"
   },
   {
      "id" : "86",
      "label" : "初齿过早[乳牙]脱落",
      "value" : "CCGZ[RY]"
   },
   {
      "id" : "87",
      "label" : "牙过早萌出",
      "value" : "YGZMC"
   },
   {
      "id" : "88",
      "label" : "保留[滞留]初齿",
      "value" : "BL[ZL]CC"
   },
   {
      "id" : "89",
      "label" : "出牙综合征",
      "value" : "CYZHZ"
   },
   {
      "id" : "90",
      "label" : "牙齿形成期间颜色改变",
      "value" : "YCXCQJYS"
   },
   {
      "id" : "91",
      "label" : "牙齿内在染色",
      "value" : "YCNZRS"
   },
   {
      "id" : "92",
      "label" : "牙发生疾患",
      "value" : "YFSJH"
   },
   {
      "id" : "93",
      "label" : "埋伏牙",
      "value" : "MFY"
   },
   {
      "id" : "94",
      "label" : "阻生齿",
      "value" : "ZSC"
   },
   {
      "id" : "95",
      "label" : "牙白斑损害",
      "value" : "YBBSH"
   },
   {
      "id" : "96",
      "label" : "牙釉质龋",
      "value" : "YYZQ"
   },
   {
      "id" : "97",
      "label" : "牙本质龋",
      "value" : "YBZQ"
   },
   {
      "id" : "98",
      "label" : "牙骨质龋",
      "value" : "YGZQ"
   },
   {
      "id" : "99",
      "label" : "牙折断",
      "value" : "YZD"
   },
   {
      "id" : "100",
      "label" : "黑牙折断",
      "value" : "HYZD"
   },
   {
      "id" : "101",
      "label" : "其他龋齿",
      "value" : "QTQC"
   },
   {
      "id" : "102",
      "label" : "龋齿",
      "value" : "QC"
   },
   {
      "id" : "103",
      "label" : "牙齿的邻面磨损",
      "value" : "YCDLMMS"
   },
   {
      "id" : "104",
      "label" : "牙齿楔状缺损",
      "value" : "YCXZQS"
   },
   {
      "id" : "105",
      "label" : "传统性牙齿磨损",
      "value" : "CTXYCMS"
   },
   {
      "id" : "106",
      "label" : "宗教仪式性牙齿磨损",
      "value" : "ZJYSXYCM"
   },
   {
      "id" : "107",
      "label" : "职业性牙齿磨损",
      "value" : "ZYXYCMS"
   },
   {
      "id" : "108",
      "label" : "习惯性牙齿磨损",
      "value" : "XGXYCMS"
   },
   {
      "id" : "109",
      "label" : "净齿剂牙齿磨损",
      "value" : "JCJYCMS"
   },
   {
      "id" : "110",
      "label" : "牙齿腐蚀",
      "value" : "YCFS"
   },
   {
      "id" : "111",
      "label" : "职业性牙齿腐蚀",
      "value" : "ZYXYCFS"
   },
   {
      "id" : "112",
      "label" : "特发性牙齿腐蚀",
      "value" : "TFXYCFS"
   },
   {
      "id" : "113",
      "label" : "持续性呕吐引起的牙齿腐蚀",
      "value" : "CXXOTYQD"
   },
   {
      "id" : "114",
      "label" : "药物和药剂引起的牙齿腐蚀",
      "value" : "YWHYJYQD"
   },
   {
      "id" : "115",
      "label" : "饮食引起的牙齿腐蚀",
      "value" : "YSYQDYCF"
   },
   {
      "id" : "116",
      "label" : "牙髓内部肉芽肿",
      "value" : "YSNBRYZ"
   },
   {
      "id" : "117",
      "label" : "牙齿吸收",
      "value" : "YCXS"
   },
   {
      "id" : "118",
      "label" : "牙骨质增生",
      "value" : "YGZZS"
   },
   {
      "id" : "119",
      "label" : "骨牙粘连",
      "value" : "GYZL"
   },
   {
      "id" : "120",
      "label" : "牙齿沉积物",
      "value" : "YCCJW"
   },
   {
      "id" : "121",
      "label" : "龈上牙石",
      "value" : "KSYS"
   },
   {
      "id" : "122",
      "label" : "龈下牙石",
      "value" : "KXYS"
   },
   {
      "id" : "123",
      "label" : "辐射性牙釉质",
      "value" : "FSXYYZ"
   },
   {
      "id" : "124",
      "label" : "牙齿敏感症(牙本质过敏)",
      "value" : "YCMGZ(YB"
   },
   {
      "id" : "125",
      "label" : "牙齿硬组织疾病 NOS",
      "value" : "YCYZZJB "
   },
   {
      "id" : "126",
      "label" : "化脓性牙髓炎",
      "value" : "HNXYSY"
   },
   {
      "id" : "127",
      "label" : "急性牙髓炎",
      "value" : "JXYSY"
   },
   {
      "id" : "128",
      "label" : "慢性牙髓炎",
      "value" : "MXYSY"
   },
   {
      "id" : "129",
      "label" : "牙髓脓肿",
      "value" : "YSNZ"
   },
   {
      "id" : "130",
      "label" : "牙髓炎",
      "value" : "YSY"
   },
   {
      "id" : "131",
      "label" : "牙脓肿",
      "value" : "YNZ"
   },
   {
      "id" : "132",
      "label" : "牙髓息肉",
      "value" : "YSXR"
   },
   {
      "id" : "133",
      "label" : "牙髓坏死",
      "value" : "YSHS"
   },
   {
      "id" : "134",
      "label" : "牙髓变性",
      "value" : "YSBX"
   },
   {
      "id" : "135",
      "label" : "不规则牙本质病",
      "value" : "BGZYBZB"
   },
   {
      "id" : "136",
      "label" : "急性根尖牙周炎",
      "value" : "JXGJYZY"
   },
   {
      "id" : "137",
      "label" : "根尖牙周炎",
      "value" : "GJYZY"
   },
   {
      "id" : "138",
      "label" : "慢性根尖牙周炎",
      "value" : "MXGJYZY"
   },
   {
      "id" : "139",
      "label" : "牙根肉芽肿",
      "value" : "YGRYZ"
   },
   {
      "id" : "140",
      "label" : "牙槽脓肿",
      "value" : "YCNZ"
   },
   {
      "id" : "141",
      "label" : "牙髓疾患 NOS",
      "value" : "YSJH NOS"
   },
   {
      "id" : "142",
      "label" : "增生性牙龈炎",
      "value" : "ZSXYKY"
   },
   {
      "id" : "143",
      "label" : "化脓性牙龈炎",
      "value" : "HNXYKY"
   },
   {
      "id" : "144",
      "label" : "牙龈炎",
      "value" : "YKY"
   },
   {
      "id" : "145",
      "label" : "慢性牙龈炎",
      "value" : "MXYKY"
   },
   {
      "id" : "146",
      "label" : "龈口炎，白色皱襞性(口腔遗传性疾病)",
      "value" : "KKY，BSZ"
   },
   {
      "id" : "147",
      "label" : "牙冠周脓肿",
      "value" : "YGZNZ"
   },
   {
      "id" : "148",
      "label" : "牙龈脓肿",
      "value" : "YKNZ"
   },
   {
      "id" : "149",
      "label" : "牙周脓肿",
      "value" : "YZNZ"
   },
   {
      "id" : "150",
      "label" : "牙周感染",
      "value" : "YZGR"
   },
   {
      "id" : "151",
      "label" : "牙周炎",
      "value" : "YZY"
   },
   {
      "id" : "152",
      "label" : "慢性牙周炎",
      "value" : "MXYZY"
   },
   {
      "id" : "153",
      "label" : "齿槽脓溢(边缘性牙周炎)[里格斯病]",
      "value" : "CCNY(BYX"
   },
   {
      "id" : "154",
      "label" : "牙周变性",
      "value" : "YZBX"
   },
   {
      "id" : "155",
      "label" : "牙周病",
      "value" : "YZB"
   },
   {
      "id" : "156",
      "label" : "牙创伤症(牙周创伤或咬颌创伤)",
      "value" : "YCSZ(YZC"
   },
   {
      "id" : "157",
      "label" : "牙龈退缩",
      "value" : "YKTS"
   },
   {
      "id" : "158",
      "label" : "牙龈增生",
      "value" : "YKZS"
   },
   {
      "id" : "159",
      "label" : "牙龈纤维瘤病",
      "value" : "YKXWLB"
   },
   {
      "id" : "160",
      "label" : "无牙牙槽嵴刺激性增生",
      "value" : "WYYCJCJX"
   },
   {
      "id" : "161",
      "label" : "牙龈出血",
      "value" : "YKCX"
   },
   {
      "id" : "162",
      "label" : "牙龈溃疡",
      "value" : "YKKY"
   },
   {
      "id" : "163",
      "label" : "牙龈瘤",
      "value" : "YKL"
   },
   {
      "id" : "164",
      "label" : "牙龈瘘管",
      "value" : "YKLG"
   },
   {
      "id" : "165",
      "label" : "牙龈息肉",
      "value" : "YKXR"
   },
   {
      "id" : "166",
      "label" : "纤维性牙龈瘤[牙龈象皮病]",
      "value" : "XWXYKL[Y"
   },
   {
      "id" : "167",
      "label" : "牙龈痛",
      "value" : "YKT"
   },
   {
      "id" : "168",
      "label" : "牙周巨细胞性肉芽肿",
      "value" : "YZJXBXRY"
   },
   {
      "id" : "169",
      "label" : "后牙反咬合",
      "value" : "HYFYH"
   },
   {
      "id" : "170",
      "label" : "齿突骨折",
      "value" : "CTGZ"
   },
   {
      "id" : "171",
      "label" : "派－乐二氏综合征[手足掌角化；牙齿脱落综合征]",
      "value" : "P－LESZH"
   },
   {
      "id" : "172",
      "label" : "口腔浅表损伤",
      "value" : "KQQBSS"
   },
   {
      "id" : "173",
      "label" : "牙龈裂伤",
      "value" : "YKLS"
   },
   {
      "id" : "174",
      "label" : "口腔开放性伤口",
      "value" : "KQKFXSK"
   },
   {
      "id" : "175",
      "label" : "创伤性牙折断",
      "value" : "CSXYZD"
   },
   {
      "id" : "176",
      "label" : "牙槽骨(齿槽)骨折",
      "value" : "YCG(CC)G"
   },
   {
      "id" : "177",
      "label" : "牙槽开放性骨折",
      "value" : "YCKFXGZ"
   },
   {
      "id" : "178",
      "label" : "创伤性牙齿脱落",
      "value" : "CSXYCTL"
   },
   {
      "id" : "179",
      "label" : "航空牙痛",
      "value" : "HKYT"
   },
   {
      "id" : "180",
      "label" : "拔牙创口出血",
      "value" : "BYCKCX"
   },
   {
      "id" : "181",
      "label" : "局部应用的牙科药物",
      "value" : "JBYYDYKY"
   },
   {
      "id" : "182",
      "label" : "口腔损伤的后遗症",
      "value" : "KQSSDHYZ"
   },
   {
      "id" : "183",
      "label" : "牙科检查",
      "value" : "YKJC"
   },
   {
      "id" : "184",
      "label" : "牙疾患的特殊筛选检查",
      "value" : "YJHDTSSX"
   },
   {
      "id" : "185",
      "label" : "假牙装置的安装和调整",
      "value" : "JYZZDAZH"
   },
   {
      "id" : "186",
      "label" : "正牙装置的安装和调整",
      "value" : "ZYZZDAZH"
   },
   {
      "id" : "187",
      "label" : "牙根和下颌骨植入物",
      "value" : "YGHXGGZR"
   },
   {
      "id" : "188",
      "label" : "具有人工假牙装置(完全)(部分)",
      "value" : "JYRGJYZZ"
   },
   {
      "id" : "189",
      "label" : "牙外科正畸术后",
      "value" : "YWKZJSH"
   },
   {
      "id" : "190",
      "label" : "拔乳牙",
      "value" : "BRY"
   },
   {
      "id" : "191",
      "label" : "齿钳拨牙  ＮＯＳ",
      "value" : "CQBY  NO"
   },
   {
      "id" : "192",
      "label" : "残留牙根拔除术",
      "value" : "CLYGBCS"
   },
   {
      "id" : "193",
      "label" : "阻生牙拔除术",
      "value" : "ZSYBCS"
   },
   {
      "id" : "194",
      "label" : "阻生智齿拨除术",
      "value" : "ZSZCBCS"
   },
   {
      "id" : "195",
      "label" : "手术性拨牙",
      "value" : "SSXBY"
   },
   {
      "id" : "196",
      "label" : "牙填充修补术",
      "value" : "YTCXBS"
   },
   {
      "id" : "197",
      "label" : "牙嵌体修补术",
      "value" : "YQTXBS"
   },
   {
      "id" : "198",
      "label" : "安装人工齿冠",
      "value" : "AZRGCG"
   },
   {
      "id" : "199",
      "label" : "牙植入术",
      "value" : "YZRS"
   },
   {
      "id" : "200",
      "label" : "义齿骨内植入",
      "value" : "YCGNZR"
   },
   {
      "id" : "201",
      "label" : "牙槽切开术",
      "value" : "YCQKS"
   },
   {
      "id" : "202",
      "label" : "牙龈活组织检查",
      "value" : "YKHZZJC"
   },
   {
      "id" : "203",
      "label" : "牙槽活组织检查",
      "value" : "YCHZZJC"
   },
   {
      "id" : "204",
      "label" : "骨或软组织移植物齿龈成形术",
      "value" : "GHRZZYZW"
   },
   {
      "id" : "205",
      "label" : "牙周损害切除术",
      "value" : "YZSHQCS"
   },
   {
      "id" : "206",
      "label" : "牙龈肿瘤切除术",
      "value" : "YKZLQCS"
   },
   {
      "id" : "207",
      "label" : "牙龈缝合术",
      "value" : "YKFHS"
   },
   {
      "id" : "208",
      "label" : "牙龈成形术",
      "value" : "YKCXS"
   },
   {
      "id" : "209",
      "label" : "牙槽肿瘤切除术",
      "value" : "YCZLQCS"
   },
   {
      "id" : "210",
      "label" : "牙囊肿摘除术",
      "value" : "YNZZCS"
   },
   {
      "id" : "211",
      "label" : "牙槽切除术",
      "value" : "YCQCS"
   },
   {
      "id" : "212",
      "label" : "牙槽修补术",
      "value" : "YCXBS"
   },
   {
      "id" : "213",
      "label" : "牙槽整形术",
      "value" : "YCZXS"
   },
   {
      "id" : "214",
      "label" : "齿槽骨修正术",
      "value" : "CCGXZS"
   },
   {
      "id" : "215",
      "label" : "齿咬合调整",
      "value" : "CYHDZ"
   },
   {
      "id" : "216",
      "label" : "口腔粘膜损害切除术",
      "value" : "KQZMSHQC"
   },
   {
      "id" : "217",
      "label" : "全口内牙齿Ｘ线检查",
      "value" : "QKNYCXXJ"
   },
   {
      "id" : "218",
      "label" : "牙根管Ｘ线检查",
      "value" : "YGGXXJC"
   },
   {
      "id" : "219",
      "label" : "口腔粘膜检查",
      "value" : "KQZMJC"
   },
   {
      "id" : "220",
      "label" : "牙周检查",
      "value" : "YZJC"
   },
   {
      "id" : "221",
      "label" : "牙齿钢丝栓结术",
      "value" : "YCGSSJS"
   },
   {
      "id" : "222",
      "label" : "齿槽骨折开放性复位术",
      "value" : "CCGZKFXF"
   },
   {
      "id" : "223",
      "label" : "装配托牙",
      "value" : "ZPTY"
   },
   {
      "id" : "224",
      "label" : "牙斑去除",
      "value" : "YBQC"
   },
   {
      "id" : "225",
      "label" : "牙齿填塞物置换",
      "value" : "YCTSWZH"
   },
   {
      "id" : "226",
      "label" : "去除牙齿栓结",
      "value" : "QCYCSJ"
   },
   {
      "id" : "227",
      "label" : "去除牙齿填塞物",
      "value" : "QCYCTSW"
   },
   {
      "id" : "228",
      "label" : "去除假牙",
      "value" : "QCJY"
   },
   {
      "id" : "229",
      "label" : "从口腔夹除腔内异物",
      "value" : "CKQJCQNY"
   },
   {
      "id" : "230",
      "label" : "良性牙(齿)源性瘤 (D16.4，D16.5)",
      "value" : "LXY(C)YX"
   },
   {
      "id" : "231",
      "label" : "牙(齿)源性瘤 NOS (D48.0)",
      "value" : "Y(C)YXL "
   },
   {
      "id" : "232",
      "label" : "恶性牙(齿)源性瘤 (C41.0，C41.1)",
      "value" : "EXY(C)YX"
   },
   {
      "id" : "233",
      "label" : "牙本质瘤 (D16.4，D16.5)",
      "value" : "YBZL (D1"
   },
   {
      "id" : "234",
      "label" : "牙(齿)骨质瘤 NOS (D16.4，D16.5)",
      "value" : "Y(C)GZL "
   },
   {
      "id" : "235",
      "label" : "良性成牙(齿)骨质(母)细胞瘤 (D16.4，D16.5)",
      "value" : "LXCY(C)G"
   },
   {
      "id" : "236",
      "label" : "牙(齿)骨质化性纤维瘤 (D16.4，D16.5)",
      "value" : "Y(C)GZHX"
   },
   {
      "id" : "237",
      "label" : "巨形牙(齿)骨骨质瘤 (D16.4，D16.5)",
      "value" : "JXY(C)GG"
   },
   {
      "id" : "238",
      "label" : "牙瘤 NOS (D16.4，D16.5)",
      "value" : "YL NOS ("
   },
   {
      "id" : "239",
      "label" : "混合性牙(齿)瘤 (D16.4，D16.5)",
      "value" : "HHXY(C)L"
   },
   {
      "id" : "240",
      "label" : "复合性牙(齿)瘤 (D16.4，D16.5)",
      "value" : "FHXY(C)L"
   },
   {
      "id" : "241",
      "label" : "成釉(母)细胞纤维牙(齿)瘤",
      "value" : "CY(M)XBX"
   },
   {
      "id" : "242",
      "label" : "成釉(母)细胞牙(齿)肉瘤 (C41.0，C41.1)",
      "value" : "CY(M)XBY"
   },
   {
      "id" : "243",
      "label" : "腺瘤样牙(齿)源性瘤 (D16.4，D16.5)",
      "value" : "XLYY(C)Y"
   },
   {
      "id" : "244",
      "label" : "钙化性牙(齿)源性囊肿 (D16.4，D16.5)",
      "value" : "GHXY(C)Y"
   },
   {
      "id" : "245",
      "label" : "牙源性形骸细胞瘤 (D16.4，D16.5)",
      "value" : "YYXXHXBL"
   },
   {
      "id" : "246",
      "label" : "牙(齿)成釉细胞瘤 (D16.4，D16.5)",
      "value" : "Y(C)CYXB"
   },
   {
      "id" : "247",
      "label" : "鳞状牙(齿)源性瘤 (D16.4，D16.5)",
      "value" : "LZY(C)YX"
   },
   {
      "id" : "248",
      "label" : "牙(齿)源性粘液瘤 (D16.4，D16.5)",
      "value" : "Y(C)YXZY"
   },
   {
      "id" : "249",
      "label" : "中心牙(齿)源性纤维瘤 (D16.4，D16.5)",
      "value" : "ZXY(C)YX"
   },
   {
      "id" : "250",
      "label" : "周围牙(齿)源性纤维瘤 (D16.4，D16.5)",
      "value" : "ZWY(C)YX"
   },
   {
      "id" : "251",
      "label" : "钙化上皮性牙源性瘤 (D16.4，D16.5)",
      "value" : "GHSPXYYX"
   },
   {
      "id" : "252",
      "label" : "经口腔甲状腺切除术",
      "value" : "JKQJZXQC"
   },
   {
      "id" : "253",
      "label" : "牙科表面用药引起的有害效应",
      "value" : "YKBMYYYQ"
   },
   {
      "id" : "254",
      "label" : "齿衄病",
      "value" : "CNB"
   },
   {
      "id" : "255",
      "label" : "口齿病（龋齿病）",
      "value" : "KCB（QCB"
   },
   {
      "id" : "256",
      "label" : "牙痛病",
      "value" : "YTB"
   },
   {
      "id" : "257",
      "label" : "牙痈病",
      "value" : "YYB"
   },
   {
      "id" : "258",
      "label" : "牙痈病",
      "value" : "YYB"
   },
   {
      "id" : "259",
      "label" : "牙宣病",
      "value" : "YXB"
   },
   {
      "id" : "260",
      "label" : "锯齿缘离断",
      "value" : "JCYLD"
   },
   {
      "id" : "261",
      "label" : "视网膜锯齿缘断离",
      "value" : "SWMJCYDL"
   },
   {
      "id" : "262",
      "label" : "锯齿缘囊肿",
      "value" : "JCYNZ"
   },
   {
      "id" : "263",
      "label" : "梅毒性牙(赫秦生氏牙)",
      "value" : "MDXY(HQS"
   },
   {
      "id" : "264",
      "label" : "哈钦森牙(先天性梅毒)",
      "value" : "HQSY(XTX"
   },
   {
      "id" : "265",
      "label" : "走马疳[口颊坏疽、走马牙疳]",
      "value" : "ZMG[KJHJ"
   },
   {
      "id" : "266",
      "label" : "坏疽性口腔炎",
      "value" : "HJXKQY"
   },
   {
      "id" : "267",
      "label" : "口腔原位癌",
      "value" : "KQYWA"
   },
   {
      "id" : "268",
      "label" : "上颌骨齿原性恶性肿瘤",
      "value" : "SGGCYXEX"
   },
   {
      "id" : "269",
      "label" : "下颌骨齿原性恶性肿瘤",
      "value" : "XGGCYXEX"
   },
   {
      "id" : "270",
      "label" : "磨牙后区恶性肿瘤",
      "value" : "MYHQEXZL"
   },
   {
      "id" : "271",
      "label" : "口腔交搭跨越的恶性肿瘤",
      "value" : "KQJDKYDE"
   },
   {
      "id" : "272",
      "label" : "口腔恶性肿瘤 NOS",
      "value" : "KQEXZL N"
   },
   {
      "id" : "273",
      "label" : "颊部，牙龈恶性肿瘤",
      "value" : "JB，YKEX"
   },
   {
      "id" : "274",
      "label" : "唇、口腔和咽交搭跨越的恶性肿瘤",
      "value" : "C、KQHYJ"
   },
   {
      "id" : "275",
      "label" : "糖尿病性牙周病",
      "value" : "TNBXYZB"
   },
   {
      "id" : "276",
      "label" : "口腔内淋巴管瘤 (M91700/0)",
      "value" : "KQNLBGL "
   },
   {
      "id" : "277",
      "label" : "口腔动态未定的肿瘤 (M80000/1)",
      "value" : "KQDTWDDZ"
   },
   {
      "id" : "278",
      "label" : "口腔血管瘤 (M91200/0)",
      "value" : "KQXGL (M"
   },
   {
      "id" : "279",
      "label" : "齿槽良性肿瘤",
      "value" : "CCLXZL"
   },
   {
      "id" : "280",
      "label" : "口腔良性肿瘤",
      "value" : "KQLXZL"
   },
   {
      "id" : "281",
      "label" : "牙龈良性肿瘤",
      "value" : "YKLXZL"
   },
   {
      "id" : "282",
      "label" : "牙瘤 (M92800/0)",
      "value" : "YL (M928"
   },
   {
      "id" : "283",
      "label" : "上颌骨非齿源性恶性肿瘤",
      "value" : "SGGFCYXE"
   },
   {
      "id" : "284",
      "label" : "下颌骨非齿源性恶性肿瘤",
      "value" : "XGGFCYXE"
   },
   {
      "id" : "285",
      "label" : "口腔继发性恶性肿瘤",
      "value" : "KQJFXEXZ"
   },
   {
      "id" : "286",
      "label" : "上唇(内)口腔面恶性肿瘤",
      "value" : "SC(N)KQM"
   },
   {
      "id" : "287",
      "label" : "下唇(内)口腔面恶性肿瘤",
      "value" : "XC(N)KQM"
   },
   {
      "id" : "288",
      "label" : "唇(内)口腔面恶性肿瘤",
      "value" : "C(N)KQME"
   },
   {
      "id" : "289",
      "label" : "上牙龈恶性肿瘤",
      "value" : "SYKEXZL"
   },
   {
      "id" : "290",
      "label" : "下牙龈恶性肿瘤",
      "value" : "XYKEXZL"
   },
   {
      "id" : "291",
      "label" : "牙龈恶性肿瘤 NOS",
      "value" : "YKEXZL N"
   },
   {
      "id" : "292",
      "label" : "前磨牙与尖牙连接处以前恶性肿瘤",
      "value" : "QMYYJYLJ"
   },
   {
      "id" : "293",
      "label" : "口腔粘膜恶性肿瘤",
      "value" : "KQZMEXZL"
   },
   {
      "id" : "294",
      "label" : "口腔念珠菌感染(鹅口疮)",
      "value" : "KQNZJGR("
   },
   {
      "id" : "295",
      "label" : "口腔苍白",
      "value" : "KQCB"
   },
   {
      "id" : "296",
      "label" : "口腔霉菌感染",
      "value" : "KQMJGR"
   },
   {
      "id" : "297",
      "label" : "牙龈结核",
      "value" : "YKJH"
   },
   {
      "id" : "298",
      "label" : "直布罗陀热(西班牙)",
      "value" : "ZBLTR(XB"
   },
   {
      "id" : "299",
      "label" : "口腔疱疹",
      "value" : "KQPZ"
   }
]
;







        <?php
        break;



    default:
        echo "";
        //$rs['status'] = -1;
        $rs['status'] = "-1|none.jpg";
        print json_encode($rs);
}
?>
