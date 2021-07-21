<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'name' => 'THE LINK CIPUTRA',
                'address' => 'Đường Phạm Văn Đồng, Phường Đông Ngạc, Bắc Từ Liêm, Hà Nội',
                'price' => '~33.2 triệu/m2',
                'information' => 'Dự án The Link 345-CT1',
                'detail' => 'Nội thất bàn giao chủ đầu tư, đã bao gồm thiết bị vệ sinh, trần tường, sàn gỗ, hệ thống cửa,...',
                'image' => 'https://file4.batdongsan.com.vn/2020/12/24/20201224145953-eb29_wm.jpg',
                'status' => '1',
            ],
            [
                'name' => 'STUDIO 930TR',
                'address' => 'Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'price' => '33.2 triệu/m2',
                'information' => 'Dự án Vinhomes Smart City Đại Mỗ',
                'detail' => 'Nội thất full, có sổ, diện tích thông thủy 25m2 đến 28m2.',
                'image' => 'https://file4.batdongsan.com.vn/2021/07/10/20210710082722-d5b7_wm.jpg',
                'status' => '1',
            ],
            [
                'name' => '1PN',
                'address' => 'Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'price' => '33.2 triệu/m2',
                'information' => '',
                'detail' => 'Nội thất full, có sổ, diện tích tim tường 47m2, thông thủy 42m2.',
                'image' => 'https://file4.batdongsan.com.vn/2020/09/21/tEfrXoEj/20200921141645-1371.jpg',
                'status' => '1',
            ],
            [
                'name' => 'THE MATRIX ONE',
                'address' => 'Đường Lê Quang Đạo, Phường Mễ Trì, Nam Từ Liêm, Hà Nội',
                'price' => '49 triệu/m2',
                'information' => 'Dự án The Matrix One',
                'detail' => 'Bàn giao full nội thất nhập khẩu từ Châu Âu như: Duravit, Malloca, Kohler, điều hòa âm trần 2 chiều Daikin, bếp từ và hút mùi Electrolux, sàn gỗ công nghiệp Hansol của Hàn Quốc.',
                'image' => 'https://1.bp.blogspot.com/-PeXwFFJl0hw/X6QHaZNf9tI/AAAAAAAAFck/l0vHzOT3ZKInfxuo-SeHQ0MBtfp7Ist7wCLcBGAsYHQ/w1200-h630-p-k-no-nu/the-matrix-one-1.jpg',
                'status' => '1',
            ],
            [
                'name' => 'METROPOLIS',
                'address' => 'Phố Liễu Giai, Phường Ngọc Khánh, Ba Đình, Hà Nội',
                'price' => '70 triệu/m2',
                'information' => 'Dự án Vinhomes Metropolis - Liễu Giai',
                'detail' => 'Hướng nhà tây nam, 2 phòng, nội thất cơ bản, có sổ đỏ.',
                'image' => 'https://trongoixaynha.com/wp-content/uploads/2020/07/Thie%CC%82%CC%81t-ke%CC%82%CC%81-ca%CC%86n-ho%CC%A3%CC%82-Penthouse.jpg',
                'status' => '1',
            ],
            [
                'name' => 'ROYAL CITY',
                'address' => 'Phường Thượng Đình, Thanh Xuân, Hà Nội',
                'price' => '37.6 triệu/m2',
                'information' => 'Địa chỉ:Royal City, 72A, Đường Nguyễn Trãi',
                'detail' => 'Hướng đông nam, 2 phòng ngủ, đầy đủ nội thất, sổ đỏ chính chủ.',
                'image' => 'https://cdn11.bigcommerce.com/s-3p90sxcn/product_images/uploaded_images/blog-post-6-top-living-room-decor-trends-of-2021-1600x1066.jpg',
                'status' => '1',
            ],
            [
                'name' => 'THE LINK CIPUTRA',
                'address' => 'Đường Phạm Văn Đồng, Phường Đông Ngạc, Bắc Từ Liêm, Hà Nội',
                'price' => '~33.2 triệu/m2',
                'information' => 'Dự án The Link 345-CT1',
                'detail' => 'Nội thất bàn giao chủ đầu tư, đã bao gồm thiết bị vệ sinh, trần tường, sàn gỗ, hệ thống cửa,...',
                'image' => 'https://file4.batdongsan.com.vn/2020/12/24/20201224145953-eb29_wm.jpg',
                'status' => '1',
            ],
            [
                'name' => 'STUDIO 930TR',
                'address' => 'Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'price' => '33.2 triệu/m2',
                'information' => 'Dự án Vinhomes Smart City Đại Mỗ',
                'detail' => 'Nội thất full, có sổ, diện tích thông thủy 25m2 đến 28m2.',
                'image' => 'https://file4.batdongsan.com.vn/2021/07/10/20210710082722-d5b7_wm.jpg',
                'status' => '1',
            ],
            [
                'name' => '1PN',
                'address' => 'Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'price' => '33.2 triệu/m2',
                'information' => '',
                'detail' => 'Nội thất full, có sổ, diện tích tim tường 47m2, thông thủy 42m2.',
                'image' => 'https://file4.batdongsan.com.vn/2020/09/21/tEfrXoEj/20200921141645-1371.jpg',
                'status' => '1',
            ],
            [
                'name' => 'THE MATRIX ONE',
                'address' => 'Đường Lê Quang Đạo, Phường Mễ Trì, Nam Từ Liêm, Hà Nội',
                'price' => '49 triệu/m2',
                'information' => 'Dự án The Matrix One',
                'detail' => 'Bàn giao full nội thất nhập khẩu từ Châu Âu như: Duravit, Malloca, Kohler, điều hòa âm trần 2 chiều Daikin, bếp từ và hút mùi Electrolux, sàn gỗ công nghiệp Hansol của Hàn Quốc.',
                'image' => 'https://1.bp.blogspot.com/-PeXwFFJl0hw/X6QHaZNf9tI/AAAAAAAAFck/l0vHzOT3ZKInfxuo-SeHQ0MBtfp7Ist7wCLcBGAsYHQ/w1200-h630-p-k-no-nu/the-matrix-one-1.jpg',
                'status' => '1',
            ],
            [
                'name' => 'METROPOLIS',
                'address' => 'Phố Liễu Giai, Phường Ngọc Khánh, Ba Đình, Hà Nội',
                'price' => '70 triệu/m2',
                'information' => 'Dự án Vinhomes Metropolis - Liễu Giai',
                'detail' => 'Hướng nhà tây nam, 2 phòng, nội thất cơ bản, có sổ đỏ.',
                'image' => 'https://trongoixaynha.com/wp-content/uploads/2020/07/Thie%CC%82%CC%81t-ke%CC%82%CC%81-ca%CC%86n-ho%CC%A3%CC%82-Penthouse.jpg',
                'status' => '1',
            ],
            [
                'name' => 'ROYAL CITY',
                'address' => 'Phường Thượng Đình, Thanh Xuân, Hà Nội',
                'price' => '37.6 triệu/m2',
                'information' => 'Địa chỉ:Royal City, 72A, Đường Nguyễn Trãi',
                'detail' => 'Hướng đông nam, 2 phòng ngủ, đầy đủ nội thất, sổ đỏ chính chủ.',
                'image' => 'https://cdn11.bigcommerce.com/s-3p90sxcn/product_images/uploaded_images/blog-post-6-top-living-room-decor-trends-of-2021-1600x1066.jpg',
                'status' => '1',
            ],
            [
                'name' => 'THE LINK CIPUTRA',
                'address' => 'Đường Phạm Văn Đồng, Phường Đông Ngạc, Bắc Từ Liêm, Hà Nội',
                'price' => '~33.2 triệu/m2',
                'information' => 'Dự án The Link 345-CT1',
                'detail' => 'Nội thất bàn giao chủ đầu tư, đã bao gồm thiết bị vệ sinh, trần tường, sàn gỗ, hệ thống cửa,...',
                'image' => 'https://file4.batdongsan.com.vn/2020/12/24/20201224145953-eb29_wm.jpg',
                'status' => '1',
            ],
            [
                'name' => 'STUDIO 930TR',
                'address' => 'Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'price' => '33.2 triệu/m2',
                'information' => 'Dự án Vinhomes Smart City Đại Mỗ',
                'detail' => 'Nội thất full, có sổ, diện tích thông thủy 25m2 đến 28m2.',
                'image' => 'https://file4.batdongsan.com.vn/2021/07/10/20210710082722-d5b7_wm.jpg',
                'status' => '1',
            ],
            [
                'name' => '1PN',
                'address' => 'Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'price' => '33.2 triệu/m2',
                'information' => '',
                'detail' => 'Nội thất full, có sổ, diện tích tim tường 47m2, thông thủy 42m2.',
                'image' => 'https://file4.batdongsan.com.vn/2020/09/21/tEfrXoEj/20200921141645-1371.jpg',
                'status' => '1',
            ],
            [
                'name' => 'THE MATRIX ONE',
                'address' => 'Đường Lê Quang Đạo, Phường Mễ Trì, Nam Từ Liêm, Hà Nội',
                'price' => '49 triệu/m2',
                'information' => 'Dự án The Matrix One',
                'detail' => 'Bàn giao full nội thất nhập khẩu từ Châu Âu như: Duravit, Malloca, Kohler, điều hòa âm trần 2 chiều Daikin, bếp từ và hút mùi Electrolux, sàn gỗ công nghiệp Hansol của Hàn Quốc.',
                'image' => 'https://1.bp.blogspot.com/-PeXwFFJl0hw/X6QHaZNf9tI/AAAAAAAAFck/l0vHzOT3ZKInfxuo-SeHQ0MBtfp7Ist7wCLcBGAsYHQ/w1200-h630-p-k-no-nu/the-matrix-one-1.jpg',
                'status' => '1',
            ],
            [
                'name' => 'METROPOLIS',
                'address' => 'Phố Liễu Giai, Phường Ngọc Khánh, Ba Đình, Hà Nội',
                'price' => '70 triệu/m2',
                'information' => 'Dự án Vinhomes Metropolis - Liễu Giai',
                'detail' => 'Hướng nhà tây nam, 2 phòng, nội thất cơ bản, có sổ đỏ.',
                'image' => 'https://trongoixaynha.com/wp-content/uploads/2020/07/Thie%CC%82%CC%81t-ke%CC%82%CC%81-ca%CC%86n-ho%CC%A3%CC%82-Penthouse.jpg',
                'status' => '1',
            ],
            [
                'name' => 'ROYAL CITY',
                'address' => 'Phường Thượng Đình, Thanh Xuân, Hà Nội',
                'price' => '37.6 triệu/m2',
                'information' => 'Địa chỉ:Royal City, 72A, Đường Nguyễn Trãi',
                'detail' => 'Hướng đông nam, 2 phòng ngủ, đầy đủ nội thất, sổ đỏ chính chủ.',
                'image' => 'https://cdn11.bigcommerce.com/s-3p90sxcn/product_images/uploaded_images/blog-post-6-top-living-room-decor-trends-of-2021-1600x1066.jpg',
                'status' => '1',
            ],
            [
                'name' => 'THE LINK CIPUTRA',
                'address' => 'Đường Phạm Văn Đồng, Phường Đông Ngạc, Bắc Từ Liêm, Hà Nội',
                'price' => '~33.2 triệu/m2',
                'information' => 'Dự án The Link 345-CT1',
                'detail' => 'Nội thất bàn giao chủ đầu tư, đã bao gồm thiết bị vệ sinh, trần tường, sàn gỗ, hệ thống cửa,...',
                'image' => 'https://file4.batdongsan.com.vn/2020/12/24/20201224145953-eb29_wm.jpg',
                'status' => '1',
            ],
            [
                'name' => 'STUDIO 930TR',
                'address' => 'Đường Đại lộ Thăng Long, Phường Tây Mỗ, Nam Từ Liêm, Hà Nội.',
                'price' => '33.2 triệu/m2',
                'information' => 'Dự án Vinhomes Smart City Đại Mỗ',
                'detail' => 'Nội thất full, có sổ, diện tích thông thủy 25m2 đến 28m2.',
                'image' => 'https://file4.batdongsan.com.vn/2021/07/10/20210710082722-d5b7_wm.jpg',
                'status' => '1',
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
