angular.module('app')
    .config(['$ocLazyLoadProvider', function($ocLazyLoadProvider) {
        $ocLazyLoadProvider.config({
            debug: true,
            events: true,
            modules: [
                {
                    name: 'uiboostrap',
                    files: [
                        'assets/storage/angular-ui-bootstrap/ui-bootstrap-tpls.js',
                    ]
                },
                {
                    name: 'cropimage',
                    files: [
                        'assets/storage/ng-file-upload/ng-file-upload.js',
                        'assets/storage/ng-file-upload/ng-img-crop.js',
                    ]
                },
                {
                    name: 'toastr',
                    files: [
                        'assets/storage/angular-toastr/angular-toastr.css',
                        'assets/storage/angular-toastr/angular-toastr.tpls.js',

                    ]
                },
                {
                    name: 'paginate',
                    files: [
                        'assets/storage/angular-utils-pagination/dirPagination.js',
                    ]
                },
                {
                    name: 'treeview',
                    files: [
                        'assets/storage/angular-treeview/tree-control-attribute.css',
                        'assets/storage/angular-treeview/tree-control.css',
                        'assets/storage/angular-treeview/angular-tree-control.js',
                    ]
                },
                {
                    name: 'select',
                    files: [
                        'assets/storage/angular-sanitize/angular-sanitize.js',
                        'assets/storage/ui-select/select.min.css',
                        'assets/storage/ui-select/select.min.js',
                    ]
                },
                {
                    name: 'dropzone',
                    files: [
                        // 'resources/assets/dropzone/dropzone.css',
                        'assets/storage/ngdropzone/ng-dropzone.min.js',
                        'assets/storage/ngdropzone/ng-dropzone.min.css',


                    ]
                },
                {
                    name: 'summernote',
                    files: [
                        'assets/storage/angular-summernote/summernote.css',
                        'assets/storage/angular-summernote/summernote.min.js',
                        'assets/storage/angular-summernote/angular-summernote.min.js',
                    ]
                },
                {
                    name: 'sanitize',
                    files: [
                        'assets/storage/angular-sanitize/angular-sanitize.js',
                    ]
                }
            ]
        });
    }]);