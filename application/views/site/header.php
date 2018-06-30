<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ZING TV</title>
	<link rel="stylesheet" href="<?php echo base_url().'public/css/header.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url().'public/css/footer.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url().'public/css/new_video.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url().'public/css/adv.css' ?>">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="top-wrap group">
        <div id="_header" class="header">
            <div class="fluid">
                <div class="header">
    				<div class="fluid">
        				<span class="logo">
        					<a href="/">
        						<img src="//zingtv-static.zadn.vn/skins/tv_v3/images/logo.jpg" alt="Zing TV" width="145" height="39">
        					</a>
        				</span>
        				<div id="_searchArea" class="search">
            				<form method="get" action="/tim-kiem/index.html" id="_frmSearch">
		            			<p>
		                			<input type="text" class="tbsearch inputSearch" value="" name="q" id="q" rel="on" autocomplete="off">
		                			<button type="submit" name='submit' class="btnsearch">
		                				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		                			</button>
		            			</p>
            				</form>
            				<ul class="tag-page">
				                <li>
				                	<a href="//me.zing.vn" target="_blank">
				                		ME
				                	</a>
				                </li>
				                <li class="selected">
				                 	<span>
					                 	<strong>
					                 		<a href="//tv.zing.vn/" >TV</a>
					                 	</strong>
					                </span>
					            </li>
				                <li>
				                	<a  href="//mp3.zing.vn/" target="_blank" >
				                		MP3
				                	</a>
				                </li>
				                <li>
				                	<a href="//news.zing.vn" target="_blank">
				                		NEWS
				                	</a>
				                </li>
				            </ul>
				            <div class="zlogin" id="_loginNY">
				                <a href="" id="_login">Đăng nhập</a> / <a href="https://id.zing.vn/register/index.10.html" target="_blank">Đăng ký</a>
				            </div><!--End .user-area -->
				            <div class="off-ads" style="display: block;">
				                <a title="Tắt quảng cáo" href="#" class="toggle-ads fn-banner-off ">
				                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
				                    <span>Bật quảng cáo</span>
				                </a>
				            </div>
        				</div>  
    				</div>
				</div> 
            </div>
        </div>
    	<div class="main-menu">  

	        <ul>
	        	<li class="dropdown">
	        		<i class="fa fa-align-justify" ></i>
	        	</li>
	            <li class="dropdown">
	                <a href="/the-loai/Phim/IWZ9Z0DW.html" class="dropbtn">
	                	Phim Truyền Hình
	                </a>
	                <div class="sub-nav phim-truyen-hinh">
	                    <div class="sub-col">
	                        <ul>
	                            <li>
	                            	<a title="Phim Hàn Quốc" href="/the-loai/Phim-Han-Quoc/IWZ9ZI08.html">Phim Hàn Quốc</a>	
	                            </li>
	                            <li>
	                            	
	                            	<a title="Phim Hoa Ngữ" href="/the-loai/Phim-Hoa-Ngu/IWZ9ZI0A.html">Phim Hoa Ngữ</a>
	                            	
	                            </li>
	                            <li>
	                            	<a title="Phim Thái Lan" href="/the-loai/Phim-Thai-Lan/IWZ9ZIUE.html">Phim Thái Lan</a>
	                            </li>
	                            <li>
	                            	<a title="Phim Việt Nam" href="/the-loai/Phim-Viet-Nam/IWZ9ZI07.html">Phim Việt Nam</a>
	                            </li>
	                            <li>
	                            	<a title="Phim Đài Loan" href="/the-loai/Phim-Dai-Loan/IWZ9ZIWC.html">Phim Đài Loan</a>
	                            	
	                            </li>
	                            <li class="border-b">
	                            	<a title="Phim Nhật Bản" href="/the-loai/Phim-Nhat-Ban/IWZ9ZIW6.html">Phim Nhật Bản</a>
	                            </li>
	                          	<li><a title="Phim Hong Kong" href="/the-loai/Phim-Hong-Kong/IWZ9ZIW7.html">Phim Hong Kong</a></li> 
	                        </ul>
                		</div><!-- END .sub-col -->
	                    <div class="sub-col">
	                        <ul>
	                            <li><a title="Phim Âu Mỹ" href="/the-loai/Phim-Au-My/IWZ9ZI09.html">Phim Âu Mỹ</a></li>
	                            <li><a title="Hành Động - Phiêu Lưu" href="/the-loai/Hanh-Dong-Phieu-Luu/IWZ9Z0FF.html">Hành Động - Phiêu Lưu</a></li>
	                            <li><a title="Khoa Học - Viễn Tưởng" href="/the-loai/Khoa-Hoc-Vien-Tuong/IWZ9ZIWF.html">Khoa Học - Viễn Tưởng</a></li>
	                            <li><a title="Hình Sự - Tội Phạm" href="/the-loai/Hinh-Su-Toi-Pham/IWZ9ZI0O.html">Hình Sự - Tội Phạm</a></li>
	                            <li><a title="Tâm Lý - Lãng Mạn" href="/the-loai/Tam-Ly-Lang-Man/IWZ9ZI0I.html">Tâm Lý - Lãng Mạn</a></li>
	                            <li><a title="Lịch Sử - Cổ Trang" href="/the-loai/Lich-Su-Co-Trang/IWZ9ZI06.html">Lịch Sử - Cổ Trang</a></li>
	                            <li><a title="Kinh Dị - Siêu Nhiên" href="/the-loai/Kinh-Di-Sieu-Nhien/IWZ9ZI0W.html">Kinh Dị - Siêu Nhiên</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                    <div class="sub-col">
	                        <ul>
	                            <li><a title="Giải Trí - Âm Nhạc" href="/the-loai/Giai-Tri-Am-Nhac/IWZ9ZI0U.html">Giải Trí - Âm Nhạc</a></li>
	                            <li><a title="Phim Thần Tượng" href="/the-loai/Phim-Than-Tuong/IWZ9ZIUD.html">Phim Thần Tượng</a></li>
	                            <li><a title="Phim Gia Đình" href="/the-loai/Phim-Gia-Dinh/IWZ9ZIWD.html">Phim Gia Đình</a></li>
	                            <li><a title="Hài Hước" href="/the-loai/Hai-Huoc/IWZ9ZI00.html">Hài Hước</a></li>
	                            <li><a title="Thể Thao" href="/the-loai/The-Thao/IWZ9ZI0Z.html">Thể Thao</a></li>
	                            <li><a title="Live Action" href="/the-loai/Live-Action/IWZ9ZI7Z.html">Live Action</a></li>
	                            <li><a title="Khác" href="/the-loai/Khac/IWZ9ZIOW.html">Khác</a></li>

	                        </ul>
	                    </div><!-- END .sub-col -->
	                    <div class="sub-col ">
	                        <ul>
	                        	<li><a title="Phim Trung Quốc" href="/the-loai/Phim-Hoa-Ngu/IWZ9ZI0A.html">Phim Trung Quốc</a></li>
	                            <li><a title="Ngôn Tình" href="/the-loai/Phim-Ngon-Tinh/IWZ9ZI7O.html">Ngôn Tình</a></li>
	                            <li><a title="Cung Đấu" href="/the-loai/Phim-Cung-Dau/IWZ9ZI7I.html">Cung Đấu</a></li>
	                            <li><a title="Tiên Hiệp" href="/the-loai/Phim-Tien-Hiep/IWZ9ZI7U.html">Tiên Hiệp</a></li>
	                            <li><a title="Kiếm Hiệp" href="/the-loai/Phim-Kiem-Hiep/IWZ9ZI7W.html">Kiếm Hiệp</a></li>
	                            <li class="border-b"><a title="Huyền Huyễn" href="/the-loai/Phim-Huyen-Huyen/IWZ9ZI76.html">Huyền Huyễn</a></li>
	                                         
	                        </ul>
	                    </div><!-- END .sub-col -->
	                </div><!-- END .sub-nav -->
        		</li> 
        		<li class="dropdown">
        			<a href="/the-loai/TV-Show/IWZ9Z0CE.html" class="dropbtn">
            				TV Show
            		</a>
            		<div class="sub-nav tv-show">
                		<div class="sub-col">
                    		<ul>
                        		
                    			<li>
                    				<div class="parent">
                    					<a title="Show Việt Nam" href="/the-loai/Show-Viet-Nam/IWZ9ZII7.html">
                    					Show Việt Nam</a>
                    				</div>
                    			</li>
                        		
                        		<li>
                        			<a title="Show Âu Mỹ" href="/the-loai/Show-Au-My/IWZ9ZII9.html">
                        				Show Âu Mỹ
                        			</a>
                        		</li>
	                            <li><a title="Show Hàn Quốc" href="/the-loai/Show-Han-Quoc/IWZ9ZII8.html">Show Hàn Quốc</a></li>
	                            <li><a title="Show Hoa Ngữ" href="/the-loai/Nhac-Hoa-Ngu/IWZ9ZI6W.html">Show Hoa Ngữ</a></li>
	                            <li><a title="Show Thực Tế" href="/the-loai/Show-Thuc-Te/IWZ9ZIIU.html">Show Thực Tế</a></li>
	                            <li><a title="Show Hài Hước" href="/the-loai/Show-Hai-Huoc/IWZ9ZI6O.html">Show Hài Hước</a></li>
	                        </ul>
                		</div><!-- END .sub-col -->
                    	<div class="sub-col last-column">
	                        <ul>
	                            <li><a title="Show Âm Nhạc" href="/the-loai/Show-Am-Nhac/IWZ9ZI6U.html">Show Âm Nhạc</a></li>
	                            <li><a title="Show Thời Trang" href="/the-loai/Show-Thoi-Trang/IWZ9ZI66.html">Show Thời Trang</a></li>
	                            <li><a title="Lễ Trao Giải" href="/the-loai/Le-Trao-Giai/IWZ9ZI6Z.html">Lễ Trao Giải</a></li>
	                            <li><a title="Game Show" href="/the-loai/Game-show/IWZ9ZIIZ.html">Game Show</a></li>
	                            <li class="border-b"><a title="Talk Show" href="/the-loai/Talk-show/IWZ9ZII6.html">Talk Show</a></li>
	                        </ul>
                   		</div><!-- END .sub-col -->
            		</div><!-- END .sub-nav -->
        		</li>
	            <li class="dropdown">
	                <a href="/the-loai/Phim-Hoat-Hinh/IWZ9Z0DO.html" class="dropbtn">Hoạt Hình</a>
	                <div class="sub-nav hoat-hinh">
	                    <div class="sub-col">
	                        <ul>
	                            <li><a title="Hoạt Hình Nhật" href="/the-loai/Anime/IWZ9ZII0.html">Anime</a></li>
	                            <li><a title="Hoạt Hình Thiếu Nhi" href="/the-loai/Hoat-hinh/IWZ9ZI6C.html">Thiếu Nhi</a></li>
	                            <li><a title="Anime Hành Động - Phiêu Lưu" href="/the-loai/Hoat-Hinh-Hanh-Dong-Phieu-Luu/IWZ9ZI0B.html">Hành Động - Phiêu Lưu</a></li>
	                            <li><a title="Anime Khoa Học - Viễn Tưởng" href="/the-loai/Hoat-Hinh-Khoa-Hoc-Vien-Tuong/IWZ9ZI0F.html">Khoa Học - Viễn Tưởng</a></li>
	                            <li><a title="Anime Siêu Nhiên - Huyền Bí" href="/the-loai/Hoat-Hinh-Anime-Sieu-Nhien-Huyen-Bi/IWZ9ZI0E.html">Siêu Nhiên - Huyền Bí</a></li>
	                            <li class="border-b"><a title="Anime Kinh Dị" href="/the-loai/Hoat-Hinh-Kinh-Di/IWZ9ZI9I.html">Kinh Dị</a></li>                       
	                        </ul>
	                    </div><!-- END .sub-col -->
	                    <div class="sub-col">
	                        <ul>
	                            <li><a title="Anime Trinh Thám" href="/the-loai/Hoat-Hinh-Trinh-Tham/IWZ9ZI8A.html">Trinh Thám</a></li>
	                            <li><a title="Anime Hài Hước" href="/the-loai/Hoat-Hinh-Hai-Huoc/IWZ9ZI0C.html">Hài Hước</a></li>
	                            <li><a title="Anime Tình Cảm - Lãng Mạn" href="/the-loai/Hoat-Hinh-Tinh-Cam-Lang-Man/IWZ9ZI0D.html">Tình Cảm - Lãng Mạn</a></li>
	                            <li><a title="Anime Seinen Josei" href="/the-loai/Hoat-Hinh-Anime-Seinen-Josei/IWZ9ZI9A.html">Seinen - Josei</a></li>
	                            <li><a title="Anime Harem" href="/the-loai/Hoat-Hinh-Harem/IWZ9ZI96.html">Harem</a></li>
	                            <li class="border-b"><a title="Anime Học Đường" href="/the-loai/Hoat-Hinh-Anime-Hoc-Duong/IWZ9ZI89.html">Học Đường</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                    <div class="sub-col">
	                        <ul>
	                            <li><a title="Anime Shoujo" href="/the-loai/Hoat-Hinh-Shoujo/IWZ9ZI99.html">Shoujo</a></li>
	                            <li><a title="Anime Shounen" href="/the-loai/Hoat-Hinh-Shounen/IWZ9ZI97.html">Shounen</a></li>
	                            <li><a title="Anime Fantasy - PhépThuật" href="/the-loai/Hoat-Hinh-Anime-Phep-thuat-Fantasy/IWZ9ZI8C.html">Phép Thuật - Fantasy</a></li>
	                            <li><a title="Hoạt Hình Đời Thường" href="/the-loai/Hoat-Hinh-Doi-Thuong/IWZ9ZI8D.html">Đời Thường</a></li>
	                            <li><a title="Hoạt Hình Võ Thuật Kiếm Hiệp" href="/the-loai/Hoat-Hinh-Vo-Thuat-Kiem-Hiep/IWZ9ZI90.html">Võ Thuật - Kiếm Hiệp</a></li>
	                            <li class="border-b"><a title="Anime Lịch Sử" href="/the-loai/Hoat-Hinh-Lich-su/IWZ9ZI8E.html">Lịch Sử</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                    <div class="sub-col sub-nav-group last-column">
	                        <ul>
	                            <li><a title="Anime Tâm Lý" href="/the-loai/Hoat-Hinh-Tam-Ly/IWZ9ZI9C.html">Tâm Lý</a></li>
	                            <li><a title="Hoạt Hình Âm Nhạc" href="/the-loai/Hoat-Hinh-Am-Nhac/IWZ9ZI8B.html">Âm Nhạc</a></li>
	                            <li><a title="Anime Mecha Robot" href="/the-loai/Hoat-Hinh-Mecha-Robot/IWZ9ZI9B.html">Mecha - Robot</a></li>
	                            <li><a title="Anime Game" href="/the-loai/Hoat-Hinh-Game/IWZ9ZI9O.html">Game</a></li>
	                            <li class="border-b"><a title="Anime Thể Thao" href="/the-loai/Hoat-Hinh-The-Thao/IWZ9ZI8F.html">Thể Thao</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                </div><!-- END .sub-nav -->
	            </li>
	            <li class="dropdown">
	                <a href="/the-loai/Hai-Huoc/IWZ9Z0D6.html">Hài Hước</a>
	                <div class="sub-nav hai-huoc">
	                    <div class="sub-col last-column" style="width: 190px;">
	                        <ul>
	                            <li><a title="Tiểu Phẩm Hài" href="/the-loai/Tieu-Pham-Hai/IWZ9ZIII.html">Tiểu Phẩm Hài</a></li>
	                            <li><a title="Sân Khấu - Liveshow Hài" href="/the-loai/San-Khau-Liveshow-Hai/IWZ9ZIIW.html">Sân Khấu - Liveshow Hài</a></li>
	                            <li><a title="Giải Trí - Vui Nhộn" href="/the-loai/Giai-Tri-Vui-Nhon/IWZ9ZIIO.html">Giải Trí - Vui Nhộn</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                </div><!-- END .sub-nav -->
	            </li>
	            <li class="dropdown">
	                <a href="/the-loai/Thieu-Nhi/IWZ9ZIW8.html">Thiếu Nhi</a>
	                <div class="sub-nav thieu-nhi" style="width:296px">
	                    <div class="sub-col">
	                        <ul>
	                            <li><a title="0 Tuổi 2 Tuổi " href="/the-loai/Be-2-tuoi/IWZ9ZI67.html">0 Tuổi - 2 Tuổi</a></li>
	                            <li><a title="2 Tuổi - 4 Tuổi" href="/the-loai/Be-2-4-tuoi/IWZ9ZIW9.html">2 Tuổi - 4 Tuổi</a></li>
	                            <li><a title="5 Tuổi - 7 Tuổi" href="/the-loai/Be-5-7-tuoi/IWZ9ZIWB.html">5 Tuổi - 7 Tuổi</a></li>
	                            <li><a title="8 Tuổi - 12 Tuổi" href="/the-loai/Be-8-12-tuoi/IWZ9ZIWA.html">8 Tuổi - 12 Tuổi</a></li>
	                            <li><a title="Giáo Dục" href="/the-loai/Giao-duc/IWZ9ZI69.html">Giáo Dục</a></li>

	                        </ul>
	                    </div><!-- END .sub-col -->
	                    <div class="sub-col last-column">
	                        <ul>
	                            <li><a title="Khoa học/ Khám phá" href="/the-loai/Khoa-hoc-kham-pha/IWZ9ZI6A.html">Khoa học/ Khám phá</a></li>
	                            <li><a title="Hoạt Hình" href="/the-loai/Hoat-hinh/IWZ9ZI6C.html">Hoạt Hình</a></li>
	                            <li><a title="Âm Nhạc" href="/the-loai/Am-Nhac/IWZ9ZI6D.html">Âm Nhạc</a></li>
	                            <li><a title="Kid Movies" href="/the-loai/Kids-Movies/IWZ9ZI6E.html">Kid Movies</a></li>
	                            <li><a title="Làm Cha Mẹ" href="/the-loai/Lam-Cha-Me/IWZ9ZI68.html">Làm Cha Mẹ</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                </div><!-- END .sub-nav -->
	            </li>
	            <li class="dropdown">
	                <a href="/the-loai/Giao-Duc/IWZ9Z0D7.html">Giáo Dục</a>
	                <div class="sub-nav phim-truyen-hinh" style="width:510px">
	                    <div class="sub-col">
	                        <ul>
	                            <li><a class="Khoa Học Vũ Trụ" href="/the-loai/Khoa-Hoc-Vu-Tru/IWZ9ZIZW.html">Không Gian - Vũ Trụ</a></li>
	                            <li><a class="Thiên Nhiên Hoang Dã" href="/the-loai/Thien-Nhien-Hoang-Da/IWZ9ZIZO.html">Thiên Nhiên Hoang Dã</a></li>
	                            <li><a class="Kết Nối Công Nghệ" href="/the-loai/Ket-Noi-Cong-Nghe/IWZ9ZIZU.html">Kết Nối Công Nghệ</a></li>
	                            <li><a class="Lịch Sử - Chiến Tranh" href="/the-loai/Lich-Su-Chien-Tranh/IWZ9ZIZZ.html">Lịch Sử - Chiến Tranh</a></li>
	                            <li><a class="Thám Hiểm - Du Lịch" href="/the-loai/Tham-Hiem-Du-Lich/IWZ9ZIZ6.html">Thám Hiểm - Du Lịch</a></li>                    
	                        </ul>
	                    </div><!-- END .sub-col -->
	                    <div class="sub-col">
	                        <ul>
	                            <li><a class="Gia Đình - Ẩm Thực" href="/the-loai/Gia-Dinh-Am-Thuc/IWZ9ZIID.html">Gia Đình - Ẩm Thực</a></li>
	                            <li><a class="Khoa Học Huyền Bí" href="/the-loai/Khoa-Hoc-Huyen-Bi/IWZ9ZIZ9.html">Giải Mã Huyền Bí</a></li>
	                            <li><a class="Khoa Học Thường Thức" href="/the-loai/Khoa-Hoc-Thuong-Thuc/IWZ9ZIZ7.html">Kiến Thức Thường Thức</a></li>
	                            <li><a class="Làm Cha Mẹ" href="/the-loai/Lam-Cha-Me/IWZ9ZIZA.html">Làm Cha Mẹ</a></li>
	                            <li><a class="Học Đường - Luyện Thi" href="/the-loai/Hoc-Duong-Luyen-Thi/IWZ9ZIZ8.html">Học Đường - Luyện Thi</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                    <div class="sub-col last-column">
	                        <ul>
	                            <li><a class="Sức Khỏe - Y Tế" href="/the-loai/Suc-Khoe-Y-Te/IWZ9ZIIE.html">Sức Khỏe - Y Tế</a></li>
	                            <li><a class="Khoa Học Quân Sự" href="/the-loai/Khoa-Hoc-Quan-Su/IWZ9ZIZC.html">Vũ Khí - Quân Sự</a></li>
	                            <li><a title="Kinh Doanh" href="/the-loai/Kinh-Doanh/IWZ9ZIIC.html">Kinh Doanh</a></li>
	                            <li><a title="Làm Đẹp" href="/the-loai/Lam-Dep/IWZ9ZI8I.html">Làm Đẹp</a></li>
	                            <li class="border-b"><a title="Kinh Doanh" href="/the-loai/Con-Nguoi/IWZ9ZIZD.html">Con Người</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                </div><!-- END .sub-nav -->
	            </li>
	            <li class="dropdown">
	                <a href="/the-loai/Phim-Dien-Anh/IWZ9ZIOZ.html">Phim Điện Ảnh</a>
	                <div class="sub-nav phim-truyen-hinh" style="width:500px">
	                    <div class="sub-col">
	                        <ul>
	                            <li><a title="Phim Việt Nam" href="/the-loai/Phim-Viet-Nam/IWZ9ZIU6.html">Phim Việt Nam</a></li>
	                            <li><a title="Phim Âu Mỹ" href="/the-loai/Phim-Au-My/IWZ9ZIUI.html">Phim Âu Mỹ</a></li>
	                            <li><a title="Phim Châu Á" href="/the-loai/Phim-Chau-A/IWZ9ZIWE.html">Phim Châu Á</a></li>
	                            <li><a title="Phim Gia Đình" href="/the-loai/Phim-Gia-Dinh/IWZ9ZIWD.html">Phim Gia Đình</a></li>
	                            <li><a title="Hình Sự - Tội Phạm" href="/the-loai/Hinh-Su-Toi-Pham/IWZ9ZIOA.html">Hình Sự - Tội Phạm</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                    <div class="sub-col">
	                        <ul>
	                            <li><a title="Hành Động - Phiêu Lưu" href="/the-loai/Hanh-Dong-Phieu-Luu/IWZ9ZIO6.html">Hành Động - Phiêu Lưu</a></li>
	                            <li><a title="Tâm Lý - Lãng Mạn" href="/the-loai/Tam-Ly-Lang-Man/IWZ9ZIO8.html">Tâm Lý - Lãng Mạn</a></li>
	                            <li><a title="Khoa Học - Viễn Tưởng" href="/the-loai/Khoa-Hoc-Vien-Tuong/IWZ9ZIOF.html">Khoa Học - Viễn Tưởng</a></li>
	                            <li><a title="Lịch Sử - Cổ Trang" href="/the-loai/Lich-Su-Co-Trang/IWZ9ZIOD.html">Lịch Sử - Cổ Trang</a></li>
	                            <li><a title="Giải Trí - Âm Nhạc" href="/the-loai/Giai-Tri-Am-Nhac/IWZ9ZIOB.html">Giải Trí - Âm Nhạc</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                    <div class="sub-col">
	                        <ul>
	                            <li><a title="Hoạt Hình" href="/the-loai/Hoat-Hinh/IWZ9ZIOI.html">Hoạt Hình</a></li>
	                            <li><a title="Kinh Dị - Siêu Nhiên" href="/the-loai/Kinh-Di/IWZ9ZIO9.html">Kinh Dị - Siêu Nhiên</a></li>
	                            <li><a title="Hài Hước" href="/the-loai/Hai-Huoc/IWZ9ZIO7.html">Hài Hước</a></li>
	                            <li><a title="Thể Thao" href="/the-loai/The-Thao/IWZ9ZIOC.html">Thể Thao</a></li>
	                            <li><a title="Khác" href="/the-loai/Khac/IWZ9ZIU0.html">Khác</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                </div><!-- END .sub-nav -->
	            </li>
	            <li class="dropdown">
	                <a href="/the-loai/Am-nhac/IWZ9Z0DC.html">Âm Nhạc</a>
	                <div class="sub-nav hai-huoc" style="width: 135px;">
	                    <div class="sub-col last-column">
	                        <ul>
	                            <li><a title="Nhạc Việt Nam" href="/the-loai/Nhac-Viet-Nam/IWZ9ZIW0.html">Nhạc Việt Nam</a></li>
	                            <li><a title="Nhạc Hàn Quốc" href="/the-loai/Nhac-Han-Quoc/IWZ9ZIWW.html">Nhạc Hàn Quốc</a></li>
	                            <li><a title="Nhạc Âu Mỹ" href="/the-loai/Nhac-Au-My/IWZ9ZIWI.html">Nhạc Âu Mỹ</a></li>
	                            <li><a title="Nhạc Hoa Ngữ" href="/the-loai/Nhac-Hoa-Ngu/IWZ9ZIWO.html">Nhạc Hoa Ngữ</a></li>
	                            <li><a title="Liveshow" href="/the-loai/Liveshow/IWZ9ZIIF.html">Liveshow</a></li>
	                        </ul>
	                    </div><!-- END .sub-col -->
	                </div><!-- END .sub-nav -->
	            </li>
	        </ul>
	        <a href="/c/danet" class="danet-logo">
	            <img src="//zingtv-static.zadn.vn/skins/tv_v3/images/danet_logo2.png" style="vertical-align:middle;margin-top: 11px;margin-left: 7px;" alt="Danet on Zing TV">
	        </a>
    		
		</div>
 
    </div>
</body>
</html>