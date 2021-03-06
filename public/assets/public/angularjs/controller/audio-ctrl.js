app = angular.module('app');
app.controller('AudioController',[
    '$scope',
    '$rootScope',
    '$http',
    'PublicService',
    '$sce',
    '$state',
    function($scope,$rootScope,$http,PublicService,$sce,$state){
	if($rootScope.loginStatus){
        var friend = $rootScope.userLogin.name;
    }else{
        var friend = 'A friend';
    }
    window.scrollTo(100,100);
    $rootScope.showPosts = false;
    console.log($rootScope.showPosts);

    $scope.getPosts = function(page){
        PublicService.getNewsSite(6,page).then(function(result){
            if(result &&result.success){
                $scope.currentPage = result.data.current_page;
                $scope.lastPage = result.data.last_page;
                $scope.posts = result.data.data;
                var dataEnter = {
                    content:friend + '  accessed audio !!!',
                    type:1
                };
                $scope.insertNoti(dataEnter);
            }
        },function(errors){
            console.log(errors);
        });
    }
    $scope.getPosts(1);
    $scope.loadMore = function(){

        $scope.getPosts($scope.currentPage+1);
    }
    $scope.previus = function(){
        $scope.getPosts($scope.currentPage-1);
    }
    $scope.redirec = function(post){
        var name = $scope.vietsub(post.name);
        $state.go('detail', { Id : post.id,Name:name});
    }
    $scope.vietsub = function(str) {
        str = str.toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
        str = str.replace(/đ/g, "d");
        str = str.replace(/ /g, "-");
        return str;
    }
    $scope.insertNoti = function(data){
        PublicService.insertNoti(data);
    }
    $scope.trustAsHtml = function(value) {
        return $sce.trustAsHtml(value);
    };
}]);
