<head>
    <meta charset="UTF-8">
    <title> Road Fox - <?php echo $__env->yieldContent('htmlheader_title', 'Your title here'); ?> </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/jquery-ui.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/MonthPicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/plugins/fullcalendar.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/plugins/fullcalendar.print.css')); ?>" rel='stylesheet' media='print'>
    <link rel="stylesheet" href="<?php echo e(asset('/plugins/dataTables.bootstrap.css')); ?>">


    <link href="<?php echo e(asset('/css/all.css')); ?>" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="<?php echo e(asset('/images/ico/logo.ico')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('/images/ico/logo-144.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('/images/ico/logo-114.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('/images/ico/logo-72.png')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('/images/ico/logo-57.png')); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php echo $__env->yieldContent('style'); ?>
    
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>

    <script>
        //See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
        window.trans = <?php 
            // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
            $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
            $trans = [];
            foreach ($lang_files as $f) {
                $filename = pathinfo($f)['filename'];
                $trans[$filename] = trans($filename);
            }
            $trans['adminlte_lang_message'] = trans('adminlte_lang::message');
            echo json_encode($trans);
         ?>
    </script>
</head>
