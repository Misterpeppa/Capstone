<div id="sidebar-wrapper" class="sidebar sidebar_collapsed">



	<div class="logo">
		<a id="logo_link" class="logo_link" href="#"><img src="/img/dogs&cats.png" alt="Clinic Logo"></a>
		<button id="sidebar_arrow" class="sidebar_arrow" type="button" onclick="toggleSidebar()">
			<svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none" class="arrow-svg">
				<path d="M6 12L1.88453 7.88384C1.3985 7.39773 1.3985 6.60227 1.88453 6.11616L6 2" stroke="#004D53" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"></path>
			</svg>
		</button>
	</div>
	<div class="items_and_button">
		<div class="navigation_links">
			<ul class="list-inline first_group">
				<li class="list-inline-item {{ $activeTab === 'dashboard' ? 'active' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<g clip-path="url(#clip0_5274_11618)">
							<path d="M4 5C4 4.73478 4.10536 4.48043 4.29289 4.29289C4.48043 4.10536 4.73478 4 5 4H9C9.26522 4 9.51957 4.10536 9.70711 4.29289C9.89464 4.48043 10 4.73478 10 5V9C10 9.26522 9.89464 9.51957 9.70711 9.70711C9.51957 9.89464 9.26522 10 9 10H5C4.73478 10 4.48043 9.89464 4.29289 9.70711C4.10536 9.51957 4 9.26522 4 9V5Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M14 5C14 4.73478 14.1054 4.48043 14.2929 4.29289C14.4804 4.10536 14.7348 4 15 4H19C19.2652 4 19.5196 4.10536 19.7071 4.29289C19.8946 4.48043 20 4.73478 20 5V9C20 9.26522 19.8946 9.51957 19.7071 9.70711C19.5196 9.89464 19.2652 10 19 10H15C14.7348 10 14.4804 9.89464 14.2929 9.70711C14.1054 9.51957 14 9.26522 14 9V5Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M4 15C4 14.7348 4.10536 14.4804 4.29289 14.2929C4.48043 14.1054 4.73478 14 5 14H9C9.26522 14 9.51957 14.1054 9.70711 14.2929C9.89464 14.4804 10 14.7348 10 15V19C10 19.2652 9.89464 19.5196 9.70711 19.7071C9.51957 19.8946 9.26522 20 9 20H5C4.73478 20 4.48043 19.8946 4.29289 19.7071C4.10536 19.5196 4 19.2652 4 19V15Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M14 15C14 14.7348 14.1054 14.4804 14.2929 14.2929C14.4804 14.1054 14.7348 14 15 14H19C19.2652 14 19.5196 14.1054 19.7071 14.2929C19.8946 14.4804 20 14.7348 20 15V19C20 19.2652 19.8946 19.5196 19.7071 19.7071C19.5196 19.8946 19.2652 20 19 20H15C14.7348 20 14.4804 19.8946 14.2929 19.7071C14.1054 19.5196 14 19.2652 14 19V15Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
						<defs>
							<clipPath id="clip0_5274_11618">
								<rect width="24" height="24" fill="white" /> </clipPath>
						</defs>
					</svg> <a href="{{ route('admin_dashboard') }} "> Dashboard</a></li>
				<li class="list-inline-item  {{ $activeTab === 'appointment' ? 'active' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<g clip-path="url(#clip0_5274_11624)">
							<path d="M9 5H7C6.46957 5 5.96086 5.21071 5.58579 5.58579C5.21071 5.96086 5 6.46957 5 7V19C5 19.5304 5.21071 20.0391 5.58579 20.4142C5.96086 20.7893 6.46957 21 7 21H17C17.5304 21 18.0391 20.7893 18.4142 20.4142C18.7893 20.0391 19 19.5304 19 19V7C19 6.46957 18.7893 5.96086 18.4142 5.58579C18.0391 5.21071 17.5304 5 17 5H15M9 5C9 4.46957 9.21071 3.96086 9.58579 3.58579C9.96086 3.21071 10.4696 3 11 3H13C13.5304 3 14.0391 3.21071 14.4142 3.58579C14.7893 3.96086 15 4.46957 15 5M9 5C9 5.53043 9.21071 6.03914 9.58579 6.41421C9.96086 6.78929 10.4696 7 11 7H13C13.5304 7 14.0391 6.78929 14.4142 6.41421C14.7893 6.03914 15 5.53043 15 5M9 17V12M12 17V16M15 17V14" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
						<defs>
							<clipPath id="clip0_5274_11624">
								<rect width="24" height="24" fill="white" /> </clipPath>
						</defs>
					</svg> <a href="{{ route('admin_appointment') }}">Appointments</a></li>
			</ul>
			<hr class="line_separator">
			<ul class="list-inline second_group">
				<li class="list-inline-item {{ $activeTab === 'emr' ? 'active' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<g clip-path="url(#clip0_5274_11639)">
							<path d="M14.7003 13.5C13.6003 11.5 13.2593 11 12.0003 11C10.7413 11 10.2643 11.755 9.16426 13.747C8.22226 15.45 6.31826 15.592 5.84326 17.038C5.74626 17.303 5.69826 17.715 5.70026 18C5.70026 19.176 6.48726 20 7.50026 20C8.75926 20 10.5003 19 12.0003 19C13.5003 19 15.2413 20 16.5003 20C17.5133 20 18.3003 19.177 18.3003 18C18.3003 17.715 18.2513 17.303 18.1543 17.038C17.6793 15.587 15.6423 15.203 14.7003 13.5Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M20.1882 8.082C20.0597 8.0277 19.9216 7.99981 19.7822 8H19.7672C19.0322 8.012 18.2072 8.75 17.7742 9.866C17.2552 11.201 17.4942 12.566 18.3122 12.918C18.4412 12.973 18.5792 13 18.7182 13C19.4572 13 20.2932 12.258 20.7292 11.134C21.2452 9.799 21.0012 8.434 20.1882 8.082Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M9.47358 9C9.52858 9 9.58258 9 9.63658 8.989C10.5806 8.861 11.1696 7.643 10.9566 6.267C10.7536 4.97 9.90958 4 9.02458 4C8.96958 4 8.91558 4 8.86158 4.011C7.91758 4.139 7.32858 5.357 7.54158 6.733C7.74558 8.026 8.58958 9 9.47458 9H9.47358Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M16.4559 6.733C16.6699 5.357 16.0809 4.139 15.1359 4.011C15.0822 4.00357 15.0281 3.99989 14.9739 4C14.0889 4 13.2459 4.97 13.0439 6.267C12.8299 7.643 13.4189 8.861 14.3639 8.989C14.4179 8.996 14.4719 9 14.5259 9C15.4109 9 16.2559 8.026 16.4559 6.733Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M5.68982 12.918C6.50582 12.566 6.74382 11.199 6.22582 9.866C5.78982 8.742 4.95482 8 4.21682 8C4.07682 8 3.93982 8.027 3.80982 8.082C2.99382 8.434 2.75582 9.801 3.27382 11.134C3.70982 12.258 4.54482 13 5.28282 13C5.42282 13 5.55982 12.973 5.68982 12.918Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
						<defs>
							<clipPath id="clip0_5274_11639">
								<rect width="24" height="24" fill="white" /> </clipPath>
						</defs>
					</svg> <a href="{{ route('admin_emr') }}">Pet Records</a></li>
				<li class="list-inline-item {{ $activeTab === 'client' ? 'active' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<g clip-path="url(#clip0_5274_11645)">
							<path d="M3 21V19C3 17.9391 3.42143 16.9217 4.17157 16.1716C4.92172 15.4214 5.93913 15 7 15H11C12.0609 15 13.0783 15.4214 13.8284 16.1716C14.5786 16.9217 15 17.9391 15 19V21M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88M21 21V19C20.9949 18.1172 20.6979 17.2608 20.1553 16.5644C19.6126 15.868 18.8548 15.3707 18 15.15M5 7C5 8.06087 5.42143 9.07828 6.17157 9.82843C6.92172 10.5786 7.93913 11 9 11C10.0609 11 11.0783 10.5786 11.8284 9.82843C12.5786 9.07828 13 8.06087 13 7C13 5.93913 12.5786 4.92172 11.8284 4.17157C11.0783 3.42143 10.0609 3 9 3C7.93913 3 6.92172 3.42143 6.17157 4.17157C5.42143 4.92172 5 5.93913 5 7Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
						<defs>
							<clipPath id="clip0_5274_11645">
								<rect width="24" height="24" fill="white" /> </clipPath>
						</defs>
					</svg> <a href="{{ route('admin_client') }}">Clients</a></li>
				<li class="list-inline-item {{ $activeTab === 'inventory' ? 'active' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<g clip-path="url(#clip0_5274_11651)">
							<path d="M20 7.5L12 3L4 7.5M20 7.5V16.5L12 21M20 7.5L12 12M12 21L4 16.5V7.5M12 21V12M4 7.5L12 12M8.2002 9.79995L15.8002 5.19995" stroke="#004D53" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
						<defs>
							<clipPath id="clip0_5274_11651">
								<rect width="24" height="24" fill="white" /> </clipPath>
						</defs>
					</svg><a href="{{ route('admin_inv') }}">Inventory</a></li>
			</ul>
			<hr class="line_separator">
			<ul class="list-inline third_group">
			<li class="list-inline-item {{ $activeTab === 'archive' ? 'active' : '' }}">
							<div data-bs-toggle="" data-bss-tooltip="" data-bs-placement="right" title="Settings">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<g clip-path="url(#clip0_6396_1764)">
										<path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
									<defs>
										<clipPath id="clip0_6396_1764">
											<rect width="24" height="24" fill="white" /> </clipPath>
									</defs>
								</svg>
							</div><a href="{{ route('admin_archive') }}">Archives</a> </li>
				<li class="list-inline-item {{ $activeTab === 'settings' ? 'active' : '' }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<g clip-path="url(#clip0_5274_11667)">
							<path d="M10.325 4.317C10.751 2.561 13.249 2.561 13.675 4.317C13.7389 4.5808 13.8642 4.82578 14.0407 5.032C14.2172 5.23822 14.4399 5.39985 14.6907 5.50375C14.9414 5.60764 15.2132 5.65085 15.4838 5.62987C15.7544 5.60889 16.0162 5.5243 16.248 5.383C17.791 4.443 19.558 6.209 18.618 7.753C18.4769 7.98466 18.3924 8.24634 18.3715 8.51677C18.3506 8.78721 18.3938 9.05877 18.4975 9.30938C18.6013 9.55999 18.7627 9.78258 18.9687 9.95905C19.1747 10.1355 19.4194 10.2609 19.683 10.325C21.439 10.751 21.439 13.249 19.683 13.675C19.4192 13.7389 19.1742 13.8642 18.968 14.0407C18.7618 14.2172 18.6001 14.4399 18.4963 14.6907C18.3924 14.9414 18.3491 15.2132 18.3701 15.4838C18.3911 15.7544 18.4757 16.0162 18.617 16.248C19.557 17.791 17.791 19.558 16.247 18.618C16.0153 18.4769 15.7537 18.3924 15.4832 18.3715C15.2128 18.3506 14.9412 18.3938 14.6906 18.4975C14.44 18.6013 14.2174 18.7627 14.0409 18.9687C13.8645 19.1747 13.7391 19.4194 13.675 19.683C13.249 21.439 10.751 21.439 10.325 19.683C10.2611 19.4192 10.1358 19.1742 9.95929 18.968C9.7828 18.7618 9.56011 18.6001 9.30935 18.4963C9.05859 18.3924 8.78683 18.3491 8.51621 18.3701C8.24559 18.3911 7.98375 18.4757 7.752 18.617C6.209 19.557 4.442 17.791 5.382 16.247C5.5231 16.0153 5.60755 15.7537 5.62848 15.4832C5.64942 15.2128 5.60624 14.9412 5.50247 14.6906C5.3987 14.44 5.23726 14.2174 5.03127 14.0409C4.82529 13.8645 4.58056 13.7391 4.317 13.675C2.561 13.249 2.561 10.751 4.317 10.325C4.5808 10.2611 4.82578 10.1358 5.032 9.95929C5.23822 9.7828 5.39985 9.56011 5.50375 9.30935C5.60764 9.05859 5.65085 8.78683 5.62987 8.51621C5.60889 8.24559 5.5243 7.98375 5.383 7.752C4.443 6.209 6.209 4.442 7.753 5.382C8.753 5.99 10.049 5.452 10.325 4.317Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z" stroke="#1C1C1C" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
						<defs>
							<clipPath id="clip0_5274_11667">
								<rect width="24" height="24" fill="white" /> </clipPath>
						</defs>
					</svg> <a href="{{ route('admin_settings') }}">Settings</a></li>
			</ul>
		</div>


										<button class="add" id="add" aria-expanded="false" data-bs-toggle="dropdown" type="button">
										<div class="add_base">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<g clip-path="url(#clip0_5266_11673)" filter="url(#filter0_d_5266_11673)">
						<path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </g>
					<defs>
						<filter id="filter0_d_5266_11673" x="-2" y="0" width="28" height="28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
							<feFlood flood-opacity="0" result="BackgroundImageFix" />
							<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
							<feOffset dy="2" />
							<feGaussianBlur stdDeviation="1" />
							<feComposite in2="hardAlpha" operator="out" />
							<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
							<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5266_11673" />
							<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5266_11673" result="shape" /> </filter>
						<clipPath id="clip0_5266_11673">
							<rect width="24" height="24" fill="white" /> </clipPath>
					</defs>
				</svg> Add</div>
										</button>
										<div class="dropdown-menu more_button" data-bs-popper="none">
										<button class="dropdown-item add_appointment_action" id="add_appointment">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_1917_11625)">
    <path d="M12.5 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V12M16 3V7M8 3V7M4 11H20M16 19H22M19 16V22" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_1917_11625">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>	Add Appointment
											</button>
											<button class="dropdown-item add_pet_action" id="add_pet">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_1917_11615)">
    <path d="M14.7003 13.5C13.6003 11.5 13.2593 11 12.0003 11C10.7413 11 10.2643 11.755 9.16426 13.747C8.22226 15.45 6.31826 15.592 5.84326 17.038C5.74626 17.303 5.69826 17.715 5.70026 18C5.70026 19.176 6.48726 20 7.50026 20C8.75926 20 10.5003 19 12.0003 19C13.5003 19 15.2413 20 16.5003 20C17.5133 20 18.3003 19.177 18.3003 18C18.3003 17.715 18.2513 17.303 18.1543 17.038C17.6793 15.587 15.6423 15.203 14.7003 13.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M20.1882 8.082C20.0597 8.0277 19.9216 7.99981 19.7822 8H19.7672C19.0322 8.012 18.2072 8.75 17.7742 9.866C17.2552 11.201 17.4942 12.566 18.3122 12.918C18.4412 12.973 18.5792 13 18.7182 13C19.4572 13 20.2932 12.258 20.7292 11.134C21.2452 9.799 21.0012 8.434 20.1882 8.082Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M9.47358 9C9.52858 9 9.58258 9 9.63658 8.989C10.5806 8.861 11.1696 7.643 10.9566 6.267C10.7536 4.97 9.90958 4 9.02458 4C8.96958 4 8.91558 4 8.86158 4.011C7.91758 4.139 7.32858 5.357 7.54158 6.733C7.74558 8.026 8.58958 9 9.47458 9H9.47358Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M16.4559 6.733C16.6699 5.357 16.0809 4.139 15.1359 4.011C15.0822 4.00357 15.0281 3.99989 14.9739 4C14.0889 4 13.2459 4.97 13.0439 6.267C12.8299 7.643 13.4189 8.861 14.3639 8.989C14.4179 8.996 14.4719 9 14.5259 9C15.4109 9 16.2559 8.026 16.4559 6.733Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M5.68982 12.918C6.50582 12.566 6.74382 11.199 6.22582 9.866C5.78982 8.742 4.95482 8 4.21682 8C4.07682 8 3.93982 8.027 3.80982 8.082C2.99382 8.434 2.75582 9.801 3.27382 11.134C3.70982 12.258 4.54482 13 5.28282 13C5.42282 13 5.55982 12.973 5.68982 12.918Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_1917_11615">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>	Add Pet</button>
											<button class="dropdown-item add_client_action" id="add_client">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_1917_11636)">
    <path d="M3 21V19C3 17.9391 3.42143 16.9217 4.17157 16.1716C4.92172 15.4214 5.93913 15 7 15H11C11.96 15 12.84 15.338 13.53 15.901M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88M16 19H22M19 16V22M5 7C5 8.06087 5.42143 9.07828 6.17157 9.82843C6.92172 10.5786 7.93913 11 9 11C10.0609 11 11.0783 10.5786 11.8284 9.82843C12.5786 9.07828 13 8.06087 13 7C13 5.93913 12.5786 4.92172 11.8284 4.17157C11.0783 3.42143 10.0609 3 9 3C7.93913 3 6.92172 3.42143 6.17157 4.17157C5.42143 4.92172 5 5.93913 5 7Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_1917_11636">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>	Add Client</button>
											<button class="dropdown-item add_product_action" id="add_product" >
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_1917_11691)">
    <path d="M9 7H15M9 11H15M9 15H13M5 5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_1917_11691">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>	Add Product
											</button>
										</div>
</div>
</div>


<div class="modal fade" role="dialog" tabindex="-1" id="add_product_modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content add_client_modal">
                <div class="modal-header">
                    <h1 class="modal-title">Add New Product</h1><button class="btn-close" aria-label="Close"
                        data-bs-dismiss="modal" type="button"></button>
                </div>
                <div class="modal-body">
                    <form id="add_product_form" method="POST" action="{{ route('inv.store') }}">
                        @csrf
                        <div class="mb-3 input_container">
                            <div class="new_input_row">
                                <div class="form-floating" style="width: 100%;"><select
                                        class="form-select form-select" name="product_type" data-id="product-categ"
                                        id="product-categ">
                                        <option value="none" selected="">Select a Product</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Vaccine">Vaccine</option>
                                        <option value="Vitamin">Vitamin</option>
                                    </select><label class="form-label form-label" for="product-categ">Product
                                        Category</label>
                                    <div id="error-product_categ" class="error-message"><span>Please select a
                                            category.</span></div>
                                </div>
                                <div class="form-floating" style="width: 100%;"><select
                                        class="form-select form-select" name="item_name" data-id="product_name"
                                        id="product_name">
                                        <option value="none" selected="">Select a Product Name</option>
                                    </select><label class="form-label form-label" for="product_name">Product
                                        Name</label>
                                    <div id="error-product_name" class="error-message"><span>Please select product
                                            name.</span></div>
                                </div>
                                <div class="form-floating"style="width: 100%;"><input
                                        class="form-control form-control" type="text" name="product_code"
                                        data-id="product_code" id="product_code" placeholder="Product Code"><label
                                        class="form-label form-label" for="product_code">Product Code</label>
                                    <div class="error-message" id="error-product_code"><span>Please enter product
                                            code.</span></div>
                                </div>
                                <div class="form-floating" style="width: 100%;"><input
                                        class="form-control form-control" type="text" name="batch_no"
                                        data-id="batch_number" id="batch_number" placeholder="Batch Number"><label
                                        class="form-label form-label" for="batch_number">Batch Number</label>
                                    <div class="error-message" id="error-batch_number"><span>Please enter batch
                                            number.</span></div>
                                </div>
                            </div>
                            <div class="new_input_row">
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control form-control" name="manufacturing_date"
                                        data-id="manufactured_date" id="manufactured_date"
                                        placeholder="Manufactured Date" type="date"><label
                                        class="form-label form-label" for="manufactured_date">Manufactured
                                        Date</label>
                                    <div class="error-message" id="error-manufactured_date"><span>Please enter the
                                            manufactured date.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control form-control" name="expiration_date"
                                        data-id="expiration_date" id="expiration_date" placeholder="Expiration Date"
                                        type="date"><label class="form-label form-label"
                                        for="expiration_date">Expiration Date</label>
                                    <div class="error-message" id="error-expiration_date"><span>Please enter the
                                            expiration date.</span></div>
                                </div>
                                <div class="form-floating" style="width:100%;"><input
                                        class="form-control form-control" name="date_stocked" data-id="datestocked"
                                        id="datestocked" placeholder="Expiration Date" type="date"><label
                                        class="form-label form-label" for="datestocked">Date Stocked</label>
                                    <div class="error-message" id="error-datestocked"><span>Please enter the date
                                            stocked.</span></div>
                                </div>
                            </div>
                            <div class="form-floating" style="width:100%;">
                                <textarea class="form-control" name="prod_desc" id="prod_description" data-id="prod_description"
                                    placeholder="Product Description"></textarea><label class="form-label form-label"
                                    for="prod_description">Product Description</label>
                                <div id="error-prod_description" class="error-message"><span>Please enter product
                                        description.</span></div>
                            </div>
                            <div class="quantity_input_container">
                                <h1>Quantity</h1>
                                <div class="form-floating">
                                    <div class="quantity_input">
                                        <button class="quantity_minus" type="button"
                                            onclick="decrementQuantity()">-</button>
                                        <input type="number" aria-labelledby="label-quantity" class="input_quantity"
                                            data-id="quantity" id="quantity" min="0" name="quantity"
                                            required="" value="0">
                                        <button class="quantity_add" type="button"
                                            onclick="incrementQuantity1()">+</button>
                                        <div id="error-quantity" class="error-message"><span>Please input a quantity
                                                value more than 0.</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer add_product_button"><button class="btn clear_form" type="button"
                        role="button" aria-label="Clear Form" onclick="clearForm()"><span
                            class="clear_form_base">Clear Form</span></button>
                    <button class="btn disabled submit_product" id="submit_product" type="submit"
                        disabled=""><span class="submit_product_base">Submit</span></button>
                </div>
            </div>
            </form>

        </div>
        
    </div>
@include('includes.admin_modals')
<script>
  
</script>