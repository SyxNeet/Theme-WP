<?php
$option_partner_logo = get_field('option_partner_logo', 'option');
// function ensure_min_items($array, $min_items)
// {
//     // Đếm số phần tử trong mảng
//     $count = count($array);

//     // Nếu mảng có ít phần tử hơn số lượng yêu cầu
//     if ($count < $min_items) {
//         // Tính toán số lần lặp lại mảng để đạt hoặc vượt số lượng tối thiểu
//         $times = ceil($min_items / $count);

//         // Lặp và gộp mảng đủ số lần để đạt số lượng phần tử tối thiểu
//         $array = array_merge(...array_fill(0, $times, $array));
//     }

//     // Trả về chỉ số lượng phần tử cần thiết (bằng $min_items) để đảm bảo chính xác số lượng
//     return array_slice($array, 0, $min_items);
// }

// // Đảm bảo 'option_partner_logo' có ít nhất 20 phần tử bằng cách lặp lại phần tử nếu cần
// $option_partner_logo = ensure_min_items($option_partner_logo, 12);
$duplicated_array = array_merge($option_partner_logo ,$option_partner_logo);
?>
<section id="logo__carousel">
    <div class="wrapper__infinity">
        <?php if (!empty($duplicated_array)): ?>
            <?php foreach ($duplicated_array as $logo): ?>
                <div class="item__logo__carousel">
                    <?= wp_get_attachment_image($logo, 'full', false); ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>