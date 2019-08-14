<?php
function randomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function upload($new_file, $prev_file = null)
{
    if ($prev_file != null && file_exists($prev_file)) {
        \File::delete($prev_file);
    }
    $relative_path = "storage/app/public";
    $file_name = randomString() . '.' . $new_file->getClientOriginalExtension();
    $new_file->move(base_path($relative_path), $file_name);
    return "storage/" . $file_name;
}

function translate($word)
{
    switch ($word) {
        case 'features':
            return "خدمات";
            break;
        case 'tabs':
            return "زبانه";
            break;
        case 'prices':
            return "قیمت";
            break;
        case 'cards':
            return "کارت";
            break;
        case 'faq':
            return "سؤالات متداول";
            break;
        case 'clients':
            return "مشتریان";
            break;
        case 'posts':
            return "پست ها";
            break;

        default:
            return $word;
            break;
    }
}
