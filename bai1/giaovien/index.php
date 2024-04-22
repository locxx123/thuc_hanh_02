<?php 
  $baseUrl = '../';
    require_once($baseUrl.'layouts/header.php');
?>
<title>Quản lý giáo viên</title>
<link rel="stylesheet" href="giaovien.css">
<div class="row">
	<div class="col-md-12 table-responsive" style="margin-top: 30px;">
		<h3>Quản lý giáo viên</h3>
        <div class="row"> 
            <div class="form-group" style="
    margin-left: 15px;
    margin-right: 10px;
">
                <select name="category_id" id="category_id" class="form-control" required="true">
                    <option value="">-- Chọn khoa --</option>
                    <option value="">Cơ bản</option>
                    <option value="">Kinh tế</option>
                    <option value="">Luật</option>
                </select>
            </div>
            <div class="form-group" style="
    margin-right: 10px;
">
                <select name="category_id" id="category_id" class="form-control" required="true">
                    <option value="">-- Chọn chuyên ngành --</option>
                    <option value="">Hệ thống thông tin</option>
                    <option value="">Công nghệ thông tin</option>
                    <option value="">Khoa học máy tính</option>
                </select>
            </div>
		    <a href="editor.php"><button type="submit" class="btn btn btn-primary" style="margin-right: 10px;">Tìm kiếm</button></a>
		    <a href="editor.php"><button type="submit" class="btn btn-success" >Làm mới</button></a>
        </div>
		<table class="table table-bordered table-hover" style="margin-top: 15px;">
			<!-- <thead> -->
				<tr>
					<th>Hình ảnh</th>
					<th>Tên giáo viên</th>
                    <th>Thông tin</th>
					<th>Khoa</th>
					<th>Chuyên ngành</th>
					<th style="width: 50px;">Tùy chỉnh</th>
					<th style="width: 50px;">Tùy chỉnh</th>
				</tr>
                <tr>
                    <th><img style="height: 150px;width: 150px;" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAMAAzAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAIFBgEAB//EADoQAAIBAwIEBQIEBgECBwAAAAECAwAEERIhBTFBURMiMmFxBoEUI5GhM0JSsdHhwSTwBxVDgpKi8f/EABgBAQEBAQEAAAAAAAAAAAAAAAABAgME/8QAHhEBAQEBAAIDAQEAAAAAAAAAAAECEQMhEhMxQTL/2gAMAwEAAhEDEQA/APmE0pztS5lOd6ncHDH5NLZoHIJWwaMJTik4DsaZGMUBllrpl2oAomnIoPCQk0VXoEekA5I503bornkCKCGWztUZWO2edXMHDYnKnWAe2M1YLwCORfK4buKnYvGXBOORqaPWlj+mVdwFfDgEjHL4qNz9H3kVoJ0ZWIONI96vTjPBt6Kr0GWJ4JGjmXQ6HDKwIIrqNRB9W1CaTBFSztQJeYoDiSpiSlx0oi8qA4kbSd64ZG70LNezQdkbeoMcCoynzCvOdhQBd6HJIdO1SbnQmoJxyHrT0Enk+9Va7GnoP4f3oKu59Z+TSxNMXHqPzSrc6Bi3OTTQpS2pxaDo3OMGpsGY6Fz9qWeZpJDDD19R716QyACG2BLH1PvUtakMD8LA2mQgv1GeVP2rxOMjGOwqs4fw4BwJGYvzODyqya2NuuQSR0Gaxa1ItLTSXABwPer+yTIBDjbv0+9Zmw1OwzjFXUMbqVIlbHMA/wDe1c7p1+utFA6Iclh6dnHerDh1yBKC4XIGAPes8iu6+Z2/zTNtG8Zzklc9Oe4xT5FwueI8A4Xxu3AmiWKbORJEApLVh/qH6LvuFZngIuLbGosvNR7itzGJGBAfJIwBimYGcxSZzqAOpSM/YjtXSactZfGjsMUKTpVjxmONL+YwroQucDoKrJeVdHMUchUgaGp8orud6Agr1RB2qBeg5LuwNdY7CoOa6dwKAZ5mhMamx3oTc6D3OnID+XSedNNQnyUFbcbMfmlsZpu4Hmb5pdRvQFtV50S6k8GEad2Y9KlargntigKpvLxs/wANNv8AVS1ZDnCrUAeLcbEjOasvxFsItKJhe4G5pUzxYGo/lj0ovX5qHimVcpGI06bb5rFdYNDhpMRoQCcknmacm1EEk422zS3D8FvNjPuKtLiP8slAAMb4rGms/rnC+jHljY1obL1A4wMdaz1g2mbRgbDYe1X9qA+M7sOhANcq9C+tUWRNiPjUKMEAGPCz7hqVsmdR5l0j+oYphpGLYxv35VfTNMwONekpIrc9xV7FD41l+KiwJoiAwH8y1nx51OJcsDjDYO1Xdk0xspVCo68iynOk4/7G36VrN9uep6YH/wAQeD4jPFINZBkAkDEkZI6e21YGVTjnX1H66gngtzEMm3nAYgE8h2996+Z3CgE4GB0Fd8159QJCcCpEmuJyqeK0y6OQoZ96J0oMpzQQZt6LnyilmO9MA+QUAm3NQI3opFc0ighpyKbiXCChhaZjXK0FTdbFvmgR86auhuaWi50BgXAKRgan2B7V4aYLNI0PnlBZiKnAup3P/tpN2IuGGOoUe29YrcMIwLCEYwPW3f8A1TLTBUIRxn2qrmkaA4A59O9Ha4jkC/l+E4HmCcjUahyymZpQpJA71eiZmRY0Or/is7byKWCxjPckVf8ADwMEjn1Fc9OmJ7FtH0XTZOMLgZG9N3TXMlswtHEeTu+elKJAzuzgZx5Se3fNA4xeS2tuYoLQ3IjGWLDK59wKxmW121eT2LavxFZhNPfCRV5IpyB81ueD8QjuoFWULr5bcqwvCfx08Ed9Pw+IIzERskRRjjuM8jnGf81c8KjePiiiIt4UjHynYpTU4k5Z1spjbWa+MXxucYPOmPp/jdlxGSdI9MN1gjKtjX7Edax/1DxCSESw7J4WcmTYE4rKWDXcd9HdWzI/nw34djz7EdDt+1az7Z1P4+38as47vhceQSQBg9j/AIr4vxy38G6kUgqdR8vQV9ks7zNqi3OPOm4PesB9a8HxKbpHzqH6D/NdsvNpiFG1T3r2nG1drbCJoLijvQyKBcrtRh6RUWG1dX00HDUQd661eAoCrvTkXoFKIKch9G9BT3nX5pWLc4pq7GSaBCMMKAsb+CW25HJ+KWWQT3XjAbM5IFM3p0wNjZivP2pe3QJHA/QOoI+TWK3BOLWxjvIU041kj/7Uhc60mKf0nFXv1efDurVgcMC2PjPOkruH8XHLeImmWNQXA5N3Io1J2UGEaApUnUe1WVpfvEqK65HRgdxVVE2cZxjORTGMuFH8xAzmsX26Z9N7YBp400k6iCTkKdvnGaP+FYBGQMrH1Fev2pP6ZOuAh+jY+RWlS0Hia1x9+1cHo/hCNboFmJJWMZJcD/ik0bwOIBwdWNzv161d8ZkUWJCDSD6z0ArJx3Wq8WAROuRszDnV9nprPq3h9pxext3njbF0nqQhcOvvjnyPvVdwv6Xt7G64XJDJLGhkCSJKRh2GWBLDqd+n960lhYHi3ApbNn0zRnxYDjlj1D9P7VCwuTa2s0UsgJhBdWO+MDOPj9xW82uVkntC64ggi0DmDyB3Px71Scb4qtzaCIerkcHfHf8AXFI3l2GuGZCwyxYgGqa9mLzNIpxqG47V2zHm1fRB9mI7GogVIbjPWmLSxubxitrCZCOgrf4zJ0mRXCKYhga5kCICPetZwv6Gtb+zaWXiL20gUlWk06M/3/epdRZi1hnG1cXlTl7wTi1tb/iJbJzGW06k8wz05b0gWkiPhzRvG2M6XUqf3p1LLP1IrvUlWoBsmiqaqCIKbiHkpVKchHkoKS7/AIjUtHnUKZu/W1LIcNQEu1DxjJ5nFQlAt4gpIJQase+KnLdJbjLgMMbCqaWd5ZC7HcnlU4sq44hOeJ8NinL5mgGiROpHcUxwe4iktZbWVgpZCMms6sjp6SV60VGJX3zWbG8b5TkQGBjcd6cgjEkydqStiAn7U9YhzJlelYrrlrbEmzii0nBbetJb3X5QaTtn5rIxy/iJEh3BUCmpuIFLjwMnyKcAdwM1zkdreZ6e+qZpvwqSMTp1jCpyUe9UZ4/BLNCrQGKWM4DNyPzVnb3ySqqO5xlhIG5GlW4ZY8QnhaZ9DSvtjr9638Y5/ZWm4P8AUzQSLIpx4YywHQe5pn6nnia2e5tgAbpV64677fFQ4baWsPDJuF4QJIg1bbnsfnOP9VWcdU28UFshJiXJVjz+KZx7Te5YqpCAuVPmOx+KQlGoNtvTbZwaDFH4syR/1nFdreR5pO3hURpCniznHQJnc0xw7iMlvaPNGwWQNqyOS0p9S27QcXto1OoyKfL2q9suAx3fBDbW8gSQbksM5+a8+tWvXnMjn00hMb8RnwVyW09znlTsks/F5wsQ14OUiA2X3P8AxVE/D5+GW8itPJIo3MabLSlrxPiPDme8t4mYSeXSQRmp7rX43sscdjDE810ZZgN0D7LU+KeD9VcKg4bdQpBIsimK70DUoHMZ9xtWJS6u4x/5hxXDSscwW4GET3I6mn+GfWcdtE4uX03O+GI1A57dqvuM2Sn+NcJ4Rwbg91HPbIl0U0xNJ6tQ6qRzz/bNYhG3+3avoi8Zf6v4NPw2ezW5Vl/KuFQB4nHJgfmsrxrgttwlYfBuXllYlXU4wD7Y/euuNfxx8mVdHvg09D6BSSHflinIj5BXRxVF2uST71WzSJDux36U1xO7WLUg3eqQlmbLZyaDsrtM+X/Suqo7V5FoowOlWIiQCDkb0NThwOlMFdfLn0pZwQSe1LCGYWwedWfD5hFMCTsdjVKjfrTCS4G/2rlqPRnTTJL4d/EyHIfavcUsp5b950dgdsYPWqpLsEQHqjZNaa2vYLk5JxmuV7HWcsU62Ny+WMroeZ259KlBHcxSKVuG1DGkEZArbWVpYzoNcxHuopx+F2KxsyzEkdwP8VPlV+MZVOI3MNyom15ONwdzvsMfOKsr24kulXxBgr096BHHbTcUeUOp8H0IOp70xKARtyrviXna83ks7yK9/iu2pRLl2bnGuRv3qcy1VcTkkgn8pwskeCfg08n4eL/SUavd8Qa5nOTyXrgVpeFSNGjaWGCSOVZuxlymcDA2+9aKxBMOpf5Tn5rzvXD9kscrtDcIDq8wNB4hFBJJHFCukRjf5qUMmqc42BH6UG4lSCXx5SCRuR3FBSfUSySKkEVu805OlAOQ9zRvpr6QsQr3HGJBLMp/g58q/PerAcY4WOL/AJ6nwSp5OFJPzVmv1NwG0UpF4aOW2y4c4+a1KzYS4vx+Dh8a23DIAjqMf0gCsZc3U1zJrmfU3Me1ar6t+orDjHDUghgjaSNgY5lTBGOYJ6jFY7OTmuuJOdefyaveDRnfenovQKr4z5qfhPkro5MNIzM2pjljzry715udeWqg0Q78qOFB7VCJQY8k0dY171oBHsKjNGZBkcxTPhmu40+kfaiKwqQxx2rqv3pyeH+aMfNIuuN6zY1KMHwQQaNHeSRnysQfaks0xZxGeUKcheZNY+Lc3xbWfHrqNtOHl25LTkv1HewwsFjca9gX5CuWwht0ZIUCh1wTzJ+9Utz5RJA53Q7Z7Vfqyfbo9bcUkhaC5DHVko3vmthwu+S9jxssg5jvXzuAkxunXAI+1WljftaTW1xGx8rYb4rdjm288WDy2qq49Hi1SbojYPwf94q/cLKiSp6XGR8UlfwiWznjbkyEfHWsanY3m8qp4ZCNIcbgitJYrotw37dwKruDWwmsYzyLLy96u1hKRoq8wAQD1NeW/r2vBAsbMm5NZri8txJKVSNjmtYsBVGTfIGfkf6qivk8MuQwHPOelBjLxJAwiaJi7ZwAKgOHsxUqQue/SnXlL3bTny9EPYUXplvUdya6Ynbxx8lkgSRrDGI05Dr3qPWptzoRO9d3mET1VYQfw/vVah8wqytseHv3oMOa8K8/OvJWkHjbCAe9Mxvv6WpdNPXOaYTltVBgzc9DbbdP817ODurAHrXYgxI3o/mOxAIHQ1UpckfynFAuLf8AL8QIfDJAOB6TTUkAGTHt3U8qNZsPNBMhEcw0vvsOxHwaEIRcOjmUaZCrEZwcU3b2Bt8hiGz1FBlgeyn0SAgjPLcGrK2mWSPBOaRENJ0AjpVZxRfzEkXr5Wq3DbGqzio/IB/pbP60pCMDaXx3qLEgFM4wMV1RuK4w/Mb4rLTUcD+pJIYo7e6HiwLtn+ZRTXFfqGK4Z7ewjZ4yQjSnbmDnFY6HKygirHhsSl4gxCjJc5+Mf5oNVw/i8turjwo/CiOPnb/dXdnxq3bR+JjdM+kp5sfNYxCzQHPKVs49udMrNKk2QfQoqXxZrU8u4+hvLbyW4mhnR49/Mp5fPavnn1Fxhbq6aGB/IuzsufOf0/emoLnRhWZ11ozSMp3xikLfgyPcNpkLou+rkSCOf61x14/j7d8eX5eisE6vcJHMdiPIuOvTPemjzNQuYFi4s91kCKJAqd2I60P8QjFmJO+9dMzkcd3tSJ3obc6g00eeZqPjITzNVkZTvT9ufy/vVakik7b1YW7Dw/SedBjn51wHFdfnioZrSDI29NwmkUODTMbj/dUPICDgUzEc+XnQIzlNtiDuKZgxj3qs1IxnOMUCRcbcmHKrBUV+o25716a2WVCOR6UHb6H8XZ+ImCyiqy2OlsNt0q04Zqi8RJW3BBx3HWkL+DwZiR6ehoCjcmk+IDXFIOmn96PETj5pO6lyje9KK1W8pr2ctqPaorstdUFiAoJJ6CstJKfNnf7VaWrXAGPDUKU05Y9KSWzuUYM0Lr8irCHxNGh8lWGCcVYh23Zy0Imh2Ck5RtWKZjZZopDGysS+Dg74NK8Pk/6wK+CD0NOX1ovikodLouNaZz7VUHlXJk1YCllVR2xuaz0nFbkTz/hziP0kfB//AGrKS8liikhvAPFWMsjL/PyOf2qhgwY5D3P/ADUqw2DNI2Z3J0gEDpTZB0A+H0oJI1ajywDVirK0YIIxgUqxWsHz/DxXAkpOyVYnTndhXgyD+YVhSkSSg+irKDxRH6RUFkTPMGm4pU0cxQYZ+ZodFcbn5oZFWo4KNH80KuqcUgsYJGyDnflTyNyPWquNxt7in4H1AKNzWolOQvgnSdzR9WwIJDChoECDbfNMQ6ARqHMda0gMrf1DJ70Gd/Ej0sc6dwDT5Kr6gMUGaFZBqAx0qCtDEZz2qtuH2xVndxtGrEjbHOqRjkk1KscFEtiRICOlCB2pi123rKmRfvGcZOM07b8QWUeYAH361G2tYXTzgNmhXvDPDQy27HYZK1tFrZIHm1gKPmrK7BJYptqAzVDwi68q6iA2cYq6dmIO1EU31EdfgEHDZO47YFV1su7eY4bnTnH3zcQry0ryqvt2wdzUqnRpXUu+OgoyRs67NgdqVJzk0/a48AZ61KoDWz/1mo/hmzuxp0EZ2qQArKlorXfdjVjBbDw9iaGmM05E2E5UGKmUhjQqZlIbegEVpEK7XcV3FB1DjFMwzFCCMUqBipDlQXsEwdenKmFbmRzNUdvMyHY7dqtbeUMvKtdZplWYvqYZFGDhmxn4xSoXVzqRBQ55KRVE5kWeN48HJXaqYcK0yaJZf/gKuUYRrq3J96S8QyTlsb5qUivk4bJDNpGJBsRnb7UaBkU6JoFRh0xvR7zVJBKE9aEY/vS8X/WQqAcSJyJ60VYW4XGpVwKZGGOeh5fNV8BeI6XGKejJJUry7UQlNCIrpGXAVttu9WbNp0Fjn3+1BmTxHG/Kh3DhI23wEFBT8Tl8S9bsAFFBWhOxeRnPMnNFjqKZXLeUczVkiYjCjpStnD/6jDPam9TdBWa08Ac7DNEzgDIoJLnltXvOOuagMHxypyJvJSADH1U1Gy6edB//2Q==" alt=""></th>
                    <td>Albert Einstein</td>
                    <td>
                        <ul>
                            <li>0378208856</li>
                            <li>anhxtanh@gmail.com</li>
                            <li>Văn Quán-Hà Đông</li>
                            <li>Đại học xây dựng</li>
                            <li>Trí tuệ nhân tạo</li>
                        </ul>
                    </td>
                    <td>Cơ bản 1</td>
                    <td>Hóa học</td>
                    <th style="width: 40px; height:40px;" >
                        <a href="editor.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
                    </th>
                    <th style="width: 50px;" >
                        <button onclick = deleteProduct('.$item['id'].') class="btn btn-danger">Xóa</button>
                    </th>
                </tr>
                <tr>
                    <th><img style="height: 150px;width: 150px;" src="https://danviet.mediacdn.vn/upload/1-2020/images/2020-01-29/10-nha-khoa-hoc-loi-lac-nhat-trong-lich-su-nhan-loai-2-1580289368-width530height360.jpg" alt=""></th>
                    <td>Isaac Newton</td>
                    <td>
                        <ul>
                            <li>0378208856</li>
                            <li>anhxtanh@gmail.com</li>
                            <li>Văn Quán-Hà Đông</li>
                            <li>Đại học xây dựng</li>
                            <li>Trí tuệ nhân tạo</li>
                        </ul>
                    </td>
                    <td>Cơ bản 1</td>
                    <td>Hóa học</td>
                    <th style="width: 40px; height:40px;" >
                        <a href="editor.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
                    </th>
                    <th style="width: 50px;" >
                        <button onclick = deleteProduct('.$item['id'].') class="btn btn-danger">Xóa</button>
                    </th>
                </tr>
                <tr>
                    <th><img style="height: 150px;width: 150px;" src="https://danviet.mediacdn.vn/upload/1-2020/images/2020-01-29/10-nha-khoa-hoc-loi-lac-nhat-trong-lich-su-nhan-loai-3-1580289368-width500height635.jpg" alt=""></th>
                    <td> Galileo Galilei</td>
                    <td>
                        <ul>
                            <li>0378208856</li>
                            <li>anhxtanh@gmail.com</li>
                            <li>Văn Quán-Hà Đông</li>
                            <li>Đại học xây dựng</li>
                            <li>Trí tuệ nhân tạo</li>
                        </ul>
                    </td>
                    <td>Cơ bản 1</td>
                    <td>Hóa học</td>
                    <th style="width: 40px; height:40px;" >
                        <a href="editor.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
                    </th>
                    <th style="width: 50px;" >
                        <button onclick = deleteProduct('.$item['id'].') class="btn btn-danger">Xóa</button>
                    </th>
                </tr>
                <tr>
                    <th><img style="height: 150px;width: 150px;" src="https://danviet.mediacdn.vn/upload/1-2020/images/2020-01-29/10-nha-khoa-hoc-loi-lac-nhat-trong-lich-su-nhan-loai-6-1580289368-width402height402.jpg" alt=""></th>
                    <td>Thomas Edison</td>
                    <td>
                        <ul>
                            <li>0378208856</li>
                            <li>anhxtanh@gmail.com</li>
                            <li>Văn Quán-Hà Đông</li>
                            <li>Đại học xây dựng</li>
                            <li>Trí tuệ nhân tạo</li>
                        </ul>
                    </td>
                    <td>Cơ bản 1</td>
                    <td>Hóa học</td>
                    <th style="width: 40px; height:40px;" >
                        <a href="editor.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
                    </th>
                    <th style="width: 50px;" >
                        <button onclick = deleteProduct('.$item['id'].') class="btn btn-danger">Xóa</button>
                    </th>
                </tr>
                <tr>
                    <th><img style="height: 150px;width: 150px;" src="https://danviet.mediacdn.vn/upload/1-2020/images/2020-01-29/10-nha-khoa-hoc-loi-lac-nhat-trong-lich-su-nhan-loai-8-1580289368-width530height530.jpg" alt=""></th>
                    <td>Stephen Hawking</td>
                    <td>
                        <ul>
                            <li>0378208856</li>
                            <li>anhxtanh@gmail.com</li>
                            <li>Văn Quán-Hà Đông</li>
                            <li>Đại học xây dựng</li>
                            <li>Trí tuệ nhân tạo</li>
                        </ul>
                    </td>
                    <td>Cơ bản 1</td>
                    <td>Hóa học</td>
                    <th style="width: 40px; height:40px;" >
                        <a href="editor.php?id='.$item['id'].'"><button class="btn btn-warning">Sửa</button></a>
                    </th>
                    <th style="width: 50px;" >
                        <button onclick = deleteProduct('.$item['id'].') class="btn btn-danger">Xóa</button>
                    </th>
                </tr>
		</table>
	</div>
</div>