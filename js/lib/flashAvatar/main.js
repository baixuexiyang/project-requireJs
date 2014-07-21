/**
 * Flash Avatar
 * User: 张顺金 <zhangshunjin@eetop.com>
 * Date: 13-9-9 下午12:33
 */


define(function (require, exports, module) {
    require("swfobject");
    require("./src/flashAvatar.css");

    var _flashWidth = 0;
    var _flashHeight = 0;

    var _resourceDir = "";
    var _uploadToDir = "";
    var _formActionUrl = "";

    var _successCallback = null;
//    var _cancelCallback = null;
//    var _failCallback = null;


    var flashvars = {};
    var params = {};
    var attributes = {};

//    var zz1 = function () {
//        //console.log("zz1");
//    };


    function FlashAvatar(flashWidth, flashHeight, resourceDir, uploadToDir, formActionUrl, callback) {
//        alert(resourceDir);
        _flashWidth = flashWidth;
        _flashHeight = flashHeight;
        _resourceDir = resourceDir;
        _uploadToDir = uploadToDir;
        _formActionUrl = formActionUrl;

        _successCallback = callback;
//        _cancelCallback = cancelCallback;
//        _failCallback = failCallback;
        flashvars = {
            "jsfunc": callback,
            //"jsfunc": this.UploadEvent,
            "imgUrl": _resourceDir + "default_avatar.png",
            "pid": "75642723",
            "uploadSrc": true,
            "showBrow": true,
            "showCame": true,
            "uploadUrl": _formActionUrl
        };


        params = {
            menu: "false",
            scale: "noScale",
            allowFullscreen: "true",
            allowScriptAccess: "always",
            wmode: "transparent",
            bgcolor: "#FFFFFF"
        };

        attributes = {
            id: "TC_Capture"
        };
    }
    FlashAvatar.prototype.init = function () {
//        alert(_resourceDir + "TC_Capture.swf");
//        seajs.log(flashvars);
//        alert(flashvars.showCame);
//        alert(flashvars.uploadUrl);
//        alert(flashvars.imgUrl);
        //alert("start init...");
//        var so = new SwfObject("js/lib/flashAvatar/src/TC_Capture.swf", "amcolumn", "820", "400", "8", "#FFFFFF");
//        so.addVariable("path", "");
//        so.write("div2"); // 要放flash的div的id

        swfobject.embedSWF(_resourceDir + "TC_Capture.swf", "altContent", _flashWidth, _flashHeight,
            "9.0.0", _resourceDir + "expressInstall.swf", flashvars, params, attributes);
    };

//    function FlashAvatar.prototype.uploadevent(status) {
//        status += '';
//        //alert(status);
//        console.log(status);
//        switch (status) {
//            case '1':
//                console.log('头像上传成功!');
//                window.parent.getElementById('avatarPic').src = "uploads/avatar_2.jpg";
//                if (this.successCallback && typeof(successCallback) === "function") {
//                    successCallback();
//                }
//                break;
//            case '2':
//                alert("js call upload");
//                if (confirm('js call upload')) {
//                    return 1;
//                } else {
//                    return 0;
//                }
//                break;
//            case '-1':  //取消
//                console.log("取消");
//                cancelCallback();
//                break;
//            case '-2':  //失败
//                console.log("失败");
//                failCallback();
//                break;
//            default:
//                console.log(status);
//        }
//    }
//_successCallback();
//                if (_successCallback && typeof(_successCallback) === "function") {
//                    _successCallback();
//                }
//    FlashAvatar.prototype.UploadEvent = function (status, param) {
//        switch (status) {
//            case 1:
//                console.log('头像上传成功bb!');
//                console.log('头像上传成功CC!');
//                //console.log(param);
////                zz1.call();
////                console.log(successCallback);
//                //successCallback();
//                console.log('头像上传成功222!');
//                break;
//            case 2:
//                console.log("js call upload");
//                break;
//            default:
//                console.log(status);
//        }
//
//    };
//
//    FlashAvatar.prototype.test11 = function () {
//        console.log("test11111");
//
//    };


//    FlashAvatar.prototype.UploadEvent = function (status) {
//        status += '';
//        switch (status) {
//            case '1':   //成功
//                console.log("成功");
//                _successCallback.apply();
////                if (_successCallback && typeof(_successCallback) === "function") {
////                    _successCallback();
////                }
//                break;
//            case '2':
//                alert("js call upload");
//                if (confirm('js call upload')) {
//                    return 1;
//                } else {
//                    return 0;
//                }
//                break;
//            case '-1':  //取消
//                alert("取消");
//                if (_cancelCallback && typeof(_cancelCallback) === "function") {
//                    _cancelCallback();
//                }
//                break;
//            case '-2':  //失败
//                alert("失败");
//                if (_failCallback && typeof(_failCallback) === "function") {
//                    _failCallback();
//                }
//                break;
//            default:
//                alert(typeof(status) + ' ' + status);
//        }
//    };


    module.exports = FlashAvatar;
});