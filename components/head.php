<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset($pageTitle) ? $pageTitle : 'INCLEN Trust International | Global Health Research'; ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                        serif: ['Merriweather', 'serif'],
                    },
                    colors: {
                        brand: {
                            50: '#F0F6FA',
                            100: '#D9E6F2',
                            600: '#00558F',
                            700: '#004473',
                            800: '#003357',
                            900: '#00223A',
                        },
                        accent: {
                            500: '#f7610c',
                            600: '#d14900',
                        },
                        slate: {
                            850: '#1e293b',
                        }
                    },
                    boxShadow: {
                        'card': '0 2px 4px rgba(0,0,0,0.05), 0 1px 2px rgba(0,0,0,0.1)',
                        'card-hover': '0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05)',
                    }
                }
            }
        }
    </script>
    <style>
        /* Clean divider lines */
        .separator {
            border-bottom: 1px solid #e2e8f0;
        }
    </style>
    <link rel="stylesheet" href="assets/carousel.css">
</head>

<body class="font-sans text-slate-800 bg-white antialiased">