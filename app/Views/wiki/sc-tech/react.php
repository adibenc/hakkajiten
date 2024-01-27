<?= $this->extend('layouts/bs') ?>
<?= $this->section('content') ?>
<nav role="navigation" style="--bg-opacity:.2"
	class="w-full pt-6 scrolling-touch lg:h-auto grow pe-0 lg:pe-5 lg:pb-16 md:pt-4 lg:pt-4 scrolling-gpu">
	<!--$-->
	<ul>
		<h3 class="mb-1 text-sm font-bold ms-5 text-tertiary dark:text-tertiary-dark">react@18.2.0</h3>
		<li><a title="Overview" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-base text-link dark:text-link-dark bg-highlight dark:bg-highlight-dark border-blue-40 hover:bg-highlight hover:text-link dark:hover:bg-highlight-dark dark:hover:text-link-dark"
				href="/reference/react" aria-current="page">
				<div>Overview
					<!-- -->
				</div>
			</a></li>
		<li><a title="Hooks" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-primary dark:text-primary-dark"
				href="/reference/react/hooks">
				<div>Hooks
					<!-- -->
				</div><span class="pe-1 text-tertiary dark:text-tertiary-dark"><svg xmlns="http://www.w3.org/2000/svg"
						width="20" height="20" viewBox="0 0 20 20"
						class="duration-100 ease-in transition -rotate-90 rtl:rotate-90"
						style="min-width:20px;min-height:20px">
						<g fill="none" fill-rule="evenodd" transform="translate(-446 -398)">
							<path fill="currentColor" fill-rule="nonzero"
								d="M95.8838835,240.366117 C95.3957281,239.877961 94.6042719,239.877961 94.1161165,240.366117 C93.6279612,240.854272 93.6279612,241.645728 94.1161165,242.133883 L98.6161165,246.633883 C99.1042719,247.122039 99.8957281,247.122039 100.383883,246.633883 L104.883883,242.133883 C105.372039,241.645728 105.372039,240.854272 104.883883,240.366117 C104.395728,239.877961 103.604272,239.877961 103.116117,240.366117 L99.5,243.982233 L95.8838835,240.366117 Z"
								transform="translate(356.5 164.5)"></path>
							<polygon points="446 418 466 418 466 398 446 398"></polygon>
						</g>
					</svg></span>
			</a>
			<div class="opacity-50" style="transition: opacity 250ms ease-in-out 0s;">
				<div id="react-collapsed-panel-:R8qm6:" aria-hidden="true" role="region"
					style="box-sizing: border-box; height: 0px; overflow: hidden; display: none;">
					<ul>
						<li><a title="use" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/use">
								<div>use
									<!-- --> <svg
										class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
										width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
										<title> - This feature is available in the latest Canary</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="noun-labs-1201738-(2)" transform="translate(2, 0)"
												fill="currentColor" fill-rule="nonzero">
												<path
													d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
													id="Shape"></path>
											</g>
										</g>
									</svg></div>
							</a></li>
						<li><a title="useCallback" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useCallback">
								<div>useCallback
									<!-- -->
								</div>
							</a></li>
						<li><a title="useContext" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useContext">
								<div>useContext
									<!-- -->
								</div>
							</a></li>
						<li><a title="useDebugValue" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useDebugValue">
								<div>useDebugValue
									<!-- -->
								</div>
							</a></li>
						<li><a title="useDeferredValue" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useDeferredValue">
								<div>useDeferredValue
									<!-- -->
								</div>
							</a></li>
						<li><a title="useEffect" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useEffect">
								<div>useEffect
									<!-- -->
								</div>
							</a></li>
						<li><a title="useId" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useId">
								<div>useId
									<!-- -->
								</div>
							</a></li>
						<li><a title="useImperativeHandle" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useImperativeHandle">
								<div>useImperativeHandle
									<!-- -->
								</div>
							</a></li>
						<li><a title="useInsertionEffect" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useInsertionEffect">
								<div>useInsertionEffect
									<!-- -->
								</div>
							</a></li>
						<li><a title="useLayoutEffect" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useLayoutEffect">
								<div>useLayoutEffect
									<!-- -->
								</div>
							</a></li>
						<li><a title="useMemo" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useMemo">
								<div>useMemo
									<!-- -->
								</div>
							</a></li>
						<li><a title="useOptimistic" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useOptimistic">
								<div>useOptimistic
									<!-- --> <svg
										class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
										width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
										<title> - This feature is available in the latest Canary</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="noun-labs-1201738-(2)" transform="translate(2, 0)"
												fill="currentColor" fill-rule="nonzero">
												<path
													d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
													id="Shape"></path>
											</g>
										</g>
									</svg></div>
							</a></li>
						<li><a title="useReducer" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useReducer">
								<div>useReducer
									<!-- -->
								</div>
							</a></li>
						<li><a title="useRef" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useRef">
								<div>useRef
									<!-- -->
								</div>
							</a></li>
						<li><a title="useState" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useState">
								<div>useState
									<!-- -->
								</div>
							</a></li>
						<li><a title="useSyncExternalStore" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useSyncExternalStore">
								<div>useSyncExternalStore
									<!-- -->
								</div>
							</a></li>
						<li><a title="useTransition" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/useTransition">
								<div>useTransition
									<!-- -->
								</div>
							</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li><a title="Components" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-primary dark:text-primary-dark"
				href="/reference/react/components">
				<div>Components
					<!-- -->
				</div><span class="pe-1 text-tertiary dark:text-tertiary-dark"><svg xmlns="http://www.w3.org/2000/svg"
						width="20" height="20" viewBox="0 0 20 20"
						class="duration-100 ease-in transition -rotate-90 rtl:rotate-90"
						style="min-width:20px;min-height:20px">
						<g fill="none" fill-rule="evenodd" transform="translate(-446 -398)">
							<path fill="currentColor" fill-rule="nonzero"
								d="M95.8838835,240.366117 C95.3957281,239.877961 94.6042719,239.877961 94.1161165,240.366117 C93.6279612,240.854272 93.6279612,241.645728 94.1161165,242.133883 L98.6161165,246.633883 C99.1042719,247.122039 99.8957281,247.122039 100.383883,246.633883 L104.883883,242.133883 C105.372039,241.645728 105.372039,240.854272 104.883883,240.366117 C104.395728,239.877961 103.604272,239.877961 103.116117,240.366117 L99.5,243.982233 L95.8838835,240.366117 Z"
								transform="translate(356.5 164.5)"></path>
							<polygon points="446 418 466 418 466 398 446 398"></polygon>
						</g>
					</svg></span>
			</a>
			<div class="opacity-50" style="transition: opacity 250ms ease-in-out 0s;">
				<div id="react-collapsed-panel-:R92m6:" aria-hidden="true" role="region"
					style="box-sizing: border-box; height: 0px; overflow: hidden; display: none;">
					<ul>
						<li><a title="<Fragment> (<>)" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/Fragment">
								<div>&lt;Fragment&gt; (&lt;&gt;)
									<!-- -->
								</div>
							</a></li>
						<li><a title="<Profiler>" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/Profiler">
								<div>&lt;Profiler&gt;
									<!-- -->
								</div>
							</a></li>
						<li><a title="<StrictMode>" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/StrictMode">
								<div>&lt;StrictMode&gt;
									<!-- -->
								</div>
							</a></li>
						<li><a title="<Suspense>" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/Suspense">
								<div>&lt;Suspense&gt;
									<!-- -->
								</div>
							</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li><a title="APIs" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-primary dark:text-primary-dark"
				href="/reference/react/apis">
				<div>APIs
					<!-- -->
				</div><span class="pe-1 text-tertiary dark:text-tertiary-dark"><svg xmlns="http://www.w3.org/2000/svg"
						width="20" height="20" viewBox="0 0 20 20"
						class="duration-100 ease-in transition -rotate-90 rtl:rotate-90"
						style="min-width:20px;min-height:20px">
						<g fill="none" fill-rule="evenodd" transform="translate(-446 -398)">
							<path fill="currentColor" fill-rule="nonzero"
								d="M95.8838835,240.366117 C95.3957281,239.877961 94.6042719,239.877961 94.1161165,240.366117 C93.6279612,240.854272 93.6279612,241.645728 94.1161165,242.133883 L98.6161165,246.633883 C99.1042719,247.122039 99.8957281,247.122039 100.383883,246.633883 L104.883883,242.133883 C105.372039,241.645728 105.372039,240.854272 104.883883,240.366117 C104.395728,239.877961 103.604272,239.877961 103.116117,240.366117 L99.5,243.982233 L95.8838835,240.366117 Z"
								transform="translate(356.5 164.5)"></path>
							<polygon points="446 418 466 418 466 398 446 398"></polygon>
						</g>
					</svg></span>
			</a>
			<div class="opacity-50" style="transition: opacity 250ms ease-in-out 0s;">
				<div id="react-collapsed-panel-:R9am6:" aria-hidden="true" role="region"
					style="box-sizing: border-box; height: 0px; overflow: hidden; display: none;">
					<ul>
						<li><a title="cache" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/cache">
								<div>cache
									<!-- --> <svg
										class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
										width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
										<title> - This feature is available in the latest Canary</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="noun-labs-1201738-(2)" transform="translate(2, 0)"
												fill="currentColor" fill-rule="nonzero">
												<path
													d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
													id="Shape"></path>
											</g>
										</g>
									</svg></div>
							</a></li>
						<li><a title="createContext" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/createContext">
								<div>createContext
									<!-- -->
								</div>
							</a></li>
						<li><a title="forwardRef" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/forwardRef">
								<div>forwardRef
									<!-- -->
								</div>
							</a></li>
						<li><a title="lazy" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/lazy">
								<div>lazy
									<!-- -->
								</div>
							</a></li>
						<li><a title="memo" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/memo">
								<div>memo
									<!-- -->
								</div>
							</a></li>
						<li><a title="startTransition" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/startTransition">
								<div>startTransition
									<!-- -->
								</div>
							</a></li>
						<li><a title="experimental_taintObjectReference" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/experimental_taintObjectReference">
								<div>experimental_taintObjectReference
									<!-- --> <svg
										class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
										width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
										<title> - This feature is available in the latest Canary</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="noun-labs-1201738-(2)" transform="translate(2, 0)"
												fill="currentColor" fill-rule="nonzero">
												<path
													d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
													id="Shape"></path>
											</g>
										</g>
									</svg></div>
							</a></li>
						<li><a title="experimental_taintUniqueValue" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/experimental_taintUniqueValue">
								<div>experimental_taintUniqueValue
									<!-- --> <svg
										class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
										width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
										<title> - This feature is available in the latest Canary</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="noun-labs-1201738-(2)" transform="translate(2, 0)"
												fill="currentColor" fill-rule="nonzero">
												<path
													d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
													id="Shape"></path>
											</g>
										</g>
									</svg></div>
							</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li><a title="Directives" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-primary dark:text-primary-dark"
				href="/reference/react/directives">
				<div>Directives
					<!-- --> <svg class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
						width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg">
						<title> - This feature is available in the latest Canary</title>
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="noun-labs-1201738-(2)" transform="translate(2, 0)" fill="currentColor"
								fill-rule="nonzero">
								<path
									d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
									id="Shape"></path>
							</g>
						</g>
					</svg></div><span class="pe-1 text-tertiary dark:text-tertiary-dark"><svg
						xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
						class="duration-100 ease-in transition -rotate-90 rtl:rotate-90"
						style="min-width:20px;min-height:20px">
						<g fill="none" fill-rule="evenodd" transform="translate(-446 -398)">
							<path fill="currentColor" fill-rule="nonzero"
								d="M95.8838835,240.366117 C95.3957281,239.877961 94.6042719,239.877961 94.1161165,240.366117 C93.6279612,240.854272 93.6279612,241.645728 94.1161165,242.133883 L98.6161165,246.633883 C99.1042719,247.122039 99.8957281,247.122039 100.383883,246.633883 L104.883883,242.133883 C105.372039,241.645728 105.372039,240.854272 104.883883,240.366117 C104.395728,239.877961 103.604272,239.877961 103.116117,240.366117 L99.5,243.982233 L95.8838835,240.366117 Z"
								transform="translate(356.5 164.5)"></path>
							<polygon points="446 418 466 418 466 398 446 398"></polygon>
						</g>
					</svg></span>
			</a>
			<div class="opacity-50" style="transition: opacity 250ms ease-in-out 0s;">
				<div id="react-collapsed-panel-:R9im6:" aria-hidden="true" role="region"
					style="box-sizing: border-box; height: 0px; overflow: hidden; display: none;">
					<ul>
						<li><a title="'use client'" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/use-client">
								<div>'use client'
									<!-- --> <svg
										class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
										width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
										<title> - This feature is available in the latest Canary</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="noun-labs-1201738-(2)" transform="translate(2, 0)"
												fill="currentColor" fill-rule="nonzero">
												<path
													d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
													id="Shape"></path>
											</g>
										</g>
									</svg></div>
							</a></li>
						<li><a title="'use server'" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/use-server">
								<div>'use server'
									<!-- --> <svg
										class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
										width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
										<title> - This feature is available in the latest Canary</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="noun-labs-1201738-(2)" transform="translate(2, 0)"
												fill="currentColor" fill-rule="nonzero">
												<path
													d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
													id="Shape"></path>
											</g>
										</g>
									</svg></div>
							</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li role="separator" class="mt-4 mb-2 ms-5 border-b border-border dark:border-border-dark"></li>
		<h3 class="mb-1 text-sm font-bold ms-5 text-tertiary dark:text-tertiary-dark mt-2">react-dom@18.2.0</h3>
		<li><a title="Hooks" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-primary dark:text-primary-dark"
				href="/reference/react-dom/hooks">
				<div>Hooks
					<!-- -->
				</div><span class="pe-1 text-tertiary dark:text-tertiary-dark"><svg xmlns="http://www.w3.org/2000/svg"
						width="20" height="20" viewBox="0 0 20 20"
						class="duration-100 ease-in transition -rotate-90 rtl:rotate-90"
						style="min-width:20px;min-height:20px">
						<g fill="none" fill-rule="evenodd" transform="translate(-446 -398)">
							<path fill="currentColor" fill-rule="nonzero"
								d="M95.8838835,240.366117 C95.3957281,239.877961 94.6042719,239.877961 94.1161165,240.366117 C93.6279612,240.854272 93.6279612,241.645728 94.1161165,242.133883 L98.6161165,246.633883 C99.1042719,247.122039 99.8957281,247.122039 100.383883,246.633883 L104.883883,242.133883 C105.372039,241.645728 105.372039,240.854272 104.883883,240.366117 C104.395728,239.877961 103.604272,239.877961 103.116117,240.366117 L99.5,243.982233 L95.8838835,240.366117 Z"
								transform="translate(356.5 164.5)"></path>
							<polygon points="446 418 466 418 466 398 446 398"></polygon>
						</g>
					</svg></span>
			</a>
			<div class="opacity-50" style="transition:opacity 250ms ease-in-out">
				<div id="react-collapsed-panel-:Ra2m6:" aria-hidden="true" role="region"
					style="box-sizing:border-box;display:none;height:0px;overflow:hidden">
					<ul>
						<li><a title="useFormState" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/hooks/useFormState">
								<div>useFormState
									<!-- --> <svg
										class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
										width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
										<title> - This feature is available in the latest Canary</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="noun-labs-1201738-(2)" transform="translate(2, 0)"
												fill="currentColor" fill-rule="nonzero">
												<path
													d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
													id="Shape"></path>
											</g>
										</g>
									</svg></div>
							</a></li>
						<li><a title="useFormStatus" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/hooks/useFormStatus">
								<div>useFormStatus
									<!-- --> <svg
										class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
										width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
										<title> - This feature is available in the latest Canary</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="noun-labs-1201738-(2)" transform="translate(2, 0)"
												fill="currentColor" fill-rule="nonzero">
												<path
													d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
													id="Shape"></path>
											</g>
										</g>
									</svg></div>
							</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li><a title="Components" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-primary dark:text-primary-dark"
				href="/reference/react-dom/components">
				<div>Components
					<!-- -->
				</div><span class="pe-1 text-tertiary dark:text-tertiary-dark"><svg xmlns="http://www.w3.org/2000/svg"
						width="20" height="20" viewBox="0 0 20 20"
						class="duration-100 ease-in transition -rotate-90 rtl:rotate-90"
						style="min-width:20px;min-height:20px">
						<g fill="none" fill-rule="evenodd" transform="translate(-446 -398)">
							<path fill="currentColor" fill-rule="nonzero"
								d="M95.8838835,240.366117 C95.3957281,239.877961 94.6042719,239.877961 94.1161165,240.366117 C93.6279612,240.854272 93.6279612,241.645728 94.1161165,242.133883 L98.6161165,246.633883 C99.1042719,247.122039 99.8957281,247.122039 100.383883,246.633883 L104.883883,242.133883 C105.372039,241.645728 105.372039,240.854272 104.883883,240.366117 C104.395728,239.877961 103.604272,239.877961 103.116117,240.366117 L99.5,243.982233 L95.8838835,240.366117 Z"
								transform="translate(356.5 164.5)"></path>
							<polygon points="446 418 466 418 466 398 446 398"></polygon>
						</g>
					</svg></span>
			</a>
			<div class="opacity-50" style="transition:opacity 250ms ease-in-out">
				<div id="react-collapsed-panel-:Raam6:" aria-hidden="true" role="region"
					style="box-sizing:border-box;display:none;height:0px;overflow:hidden">
					<ul>
						<li><a title="Common (e.g. <div>)" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/components/common">
								<div>Common (e.g. &lt;div&gt;)
									<!-- -->
								</div>
							</a></li>
						<li><a title="<form>" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/components/form">
								<div>&lt;form&gt;
									<!-- --> <svg
										class="ms-2 text-gray-30 dark:text-gray-60 inline-block w-4 h-4 align-[-3px]"
										width="20px" height="20px" viewBox="0 0 20 20" version="1.1"
										xmlns="http://www.w3.org/2000/svg">
										<title> - This feature is available in the latest Canary</title>
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="noun-labs-1201738-(2)" transform="translate(2, 0)"
												fill="currentColor" fill-rule="nonzero">
												<path
													d="M10.2865804,5.55665262 L10.2865804,2.22331605 L10.8591544,2.22331605 C11.0103911,2.22244799 11.1551447,2.16342155 11.2617505,2.05914367 C11.3684534,1.95486857 11.4282767,1.81370176 11.4282767,1.66667106 L11.4282767,0.556642208 C11.4282767,0.40907262 11.3678934,0.26747526 11.2605218,0.16308627 C11.1531503,0.0587028348 11.0074938,0 10.8556998,0 L5.14338868,0 C4.9915947,0 4.84594391,0.0587028348 4.73856664,0.16308627 C4.63119507,0.267469704 4.57081178,0.40907262 4.57081178,0.556642208 L4.57081178,1.66667106 C4.57081178,1.81434899 4.63119507,1.95594912 4.73856664,2.06033811 C4.8459382,2.16472155 4.9915947,2.22331605 5.14338868,2.22331605 L5.71596273,2.22331605 L5.71596273,5.55665262 C5.71596273,8.38665538 2.97295619,9.88999017 0.651686904,15.5566623 C-0.0957823782,17.360053 -2.00560068,20 7.99951567,20 C18.004632,20 16.0948137,17.3600252 15.3507732,15.5566623 C13.0124432,9.88999017 10.2865804,8.38665538 10.2865804,5.55665262 Z M9.89570197,10.709991 C10.0921412,10.709991 10.2805515,10.7858383 10.4193876,10.9209301 C10.5583466,11.0559135 10.6363652,11.2390693 10.6363652,11.4300417 C10.6363652,11.6210141 10.5583466,11.8040698 10.4193876,11.9391533 C10.2805401,12.0741367 10.0921412,12.1499813 9.89570197,12.1499813 C9.6992627,12.1499813 9.51096673,12.074134 9.37201631,11.9391533 C9.23316875,11.8040615 9.15515307,11.6210141 9.15515307,11.4300417 C9.15515307,11.2390693 9.2331716,11.0559024 9.37201631,10.9209301 C9.57264221,10.7258996 9.61239426,10.709991 9.89570197,10.709991 Z M8.98919546,9.04212824 C9.09790709,9.14792278 9.15884755,9.29158681 9.1585213,9.44110085 C9.15829001,9.59073155 9.09678989,9.73407335 8.98763252,9.83954568 C8.87847514,9.945018 8.73069852,10.0039347 8.57678157,10.0033977 C8.42286747,10.0027392 8.27565088,9.94273467 8.16727355,9.83639845 C8.05900765,9.73006224 7.99873866,9.58628988 7.99963013,9.43664806 C8.00052304,9.28788403 8.0620221,9.14542556 8.17051087,9.04048101 C8.27911107,8.93555591 8.42599335,8.87663641 8.57913312,8.87663641 C8.73291864,8.87665585 8.88047525,8.93622535 8.98919546,9.04212824 Z M7.99965585,17.9999981 C4.91377349,17.9999981 3.29882839,17.7332867 2.51364277,17.4999976 C2.37780966,17.4476975 2.26954376,17.3439641 2.21396931,17.2125528 C2.15838628,17.0811499 2.16006066,16.9334692 2.21876871,16.8033858 C2.6144474,15.5921346 3.14916224,14.4280501 3.81316983,13.3333824 C5.980145,9.82337899 8.22941036,13.8867718 10.0980836,13.8867718 C11.9666996,13.8867718 11.4695868,12.1534924 12.1827971,13.3333824 C12.8511505,14.4269112 13.3916656,15.5896902 13.794259,16.8000524 C13.8533022,16.9322137 13.8537479,17.0822749 13.7952635,17.2147751 C13.7368889,17.3472613 13.6248314,17.4504531 13.4856467,17.5000531 C12.6833967,17.7332867 11.0855382,17.9999981 7.99965585,17.9999981 Z"
													id="Shape"></path>
											</g>
										</g>
									</svg></div>
							</a></li>
						<li><a title="<input>" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/components/input">
								<div>&lt;input&gt;
									<!-- -->
								</div>
							</a></li>
						<li><a title="<option>" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/components/option">
								<div>&lt;option&gt;
									<!-- -->
								</div>
							</a></li>
						<li><a title="<progress>" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/components/progress">
								<div>&lt;progress&gt;
									<!-- -->
								</div>
							</a></li>
						<li><a title="<select>" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/components/select">
								<div>&lt;select&gt;
									<!-- -->
								</div>
							</a></li>
						<li><a title="<textarea>" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/components/textarea">
								<div>&lt;textarea&gt;
									<!-- -->
								</div>
							</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li><a title="APIs" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-primary dark:text-primary-dark"
				href="/reference/react-dom">
				<div>APIs
					<!-- -->
				</div><span class="pe-1 text-tertiary dark:text-tertiary-dark"><svg xmlns="http://www.w3.org/2000/svg"
						width="20" height="20" viewBox="0 0 20 20"
						class="duration-100 ease-in transition -rotate-90 rtl:rotate-90"
						style="min-width:20px;min-height:20px">
						<g fill="none" fill-rule="evenodd" transform="translate(-446 -398)">
							<path fill="currentColor" fill-rule="nonzero"
								d="M95.8838835,240.366117 C95.3957281,239.877961 94.6042719,239.877961 94.1161165,240.366117 C93.6279612,240.854272 93.6279612,241.645728 94.1161165,242.133883 L98.6161165,246.633883 C99.1042719,247.122039 99.8957281,247.122039 100.383883,246.633883 L104.883883,242.133883 C105.372039,241.645728 105.372039,240.854272 104.883883,240.366117 C104.395728,239.877961 103.604272,239.877961 103.116117,240.366117 L99.5,243.982233 L95.8838835,240.366117 Z"
								transform="translate(356.5 164.5)"></path>
							<polygon points="446 418 466 418 466 398 446 398"></polygon>
						</g>
					</svg></span>
			</a>
			<div class="opacity-50" style="transition:opacity 250ms ease-in-out">
				<div id="react-collapsed-panel-:Raim6:" aria-hidden="true" role="region"
					style="box-sizing:border-box;display:none;height:0px;overflow:hidden">
					<ul>
						<li><a title="createPortal" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/createPortal">
								<div>createPortal
									<!-- -->
								</div>
							</a></li>
						<li><a title="flushSync" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/flushSync">
								<div>flushSync
									<!-- -->
								</div>
							</a></li>
						<li><a title="findDOMNode" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/findDOMNode">
								<div>findDOMNode
									<!-- -->
								</div>
							</a></li>
						<li><a title="hydrate" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/hydrate">
								<div>hydrate
									<!-- -->
								</div>
							</a></li>
						<li><a title="render" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/render">
								<div>render
									<!-- -->
								</div>
							</a></li>
						<li><a title="unmountComponentAtNode" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/unmountComponentAtNode">
								<div>unmountComponentAtNode
									<!-- -->
								</div>
							</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li><a title="Client APIs" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-primary dark:text-primary-dark"
				href="/reference/react-dom/client">
				<div>Client APIs
					<!-- -->
				</div><span class="pe-1 text-tertiary dark:text-tertiary-dark"><svg xmlns="http://www.w3.org/2000/svg"
						width="20" height="20" viewBox="0 0 20 20"
						class="duration-100 ease-in transition -rotate-90 rtl:rotate-90"
						style="min-width:20px;min-height:20px">
						<g fill="none" fill-rule="evenodd" transform="translate(-446 -398)">
							<path fill="currentColor" fill-rule="nonzero"
								d="M95.8838835,240.366117 C95.3957281,239.877961 94.6042719,239.877961 94.1161165,240.366117 C93.6279612,240.854272 93.6279612,241.645728 94.1161165,242.133883 L98.6161165,246.633883 C99.1042719,247.122039 99.8957281,247.122039 100.383883,246.633883 L104.883883,242.133883 C105.372039,241.645728 105.372039,240.854272 104.883883,240.366117 C104.395728,239.877961 103.604272,239.877961 103.116117,240.366117 L99.5,243.982233 L95.8838835,240.366117 Z"
								transform="translate(356.5 164.5)"></path>
							<polygon points="446 418 466 418 466 398 446 398"></polygon>
						</g>
					</svg></span>
			</a>
			<div class="opacity-50" style="transition:opacity 250ms ease-in-out">
				<div id="react-collapsed-panel-:Raqm6:" aria-hidden="true" role="region"
					style="box-sizing:border-box;display:none;height:0px;overflow:hidden">
					<ul>
						<li><a title="createRoot" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/client/createRoot">
								<div>createRoot
									<!-- -->
								</div>
							</a></li>
						<li><a title="hydrateRoot" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/client/hydrateRoot">
								<div>hydrateRoot
									<!-- -->
								</div>
							</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li><a title="Server APIs" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-primary dark:text-primary-dark"
				href="/reference/react-dom/server">
				<div>Server APIs
					<!-- -->
				</div><span class="pe-1 text-tertiary dark:text-tertiary-dark"><svg xmlns="http://www.w3.org/2000/svg"
						width="20" height="20" viewBox="0 0 20 20"
						class="duration-100 ease-in transition -rotate-90 rtl:rotate-90"
						style="min-width:20px;min-height:20px">
						<g fill="none" fill-rule="evenodd" transform="translate(-446 -398)">
							<path fill="currentColor" fill-rule="nonzero"
								d="M95.8838835,240.366117 C95.3957281,239.877961 94.6042719,239.877961 94.1161165,240.366117 C93.6279612,240.854272 93.6279612,241.645728 94.1161165,242.133883 L98.6161165,246.633883 C99.1042719,247.122039 99.8957281,247.122039 100.383883,246.633883 L104.883883,242.133883 C105.372039,241.645728 105.372039,240.854272 104.883883,240.366117 C104.395728,239.877961 103.604272,239.877961 103.116117,240.366117 L99.5,243.982233 L95.8838835,240.366117 Z"
								transform="translate(356.5 164.5)"></path>
							<polygon points="446 418 466 418 466 398 446 398"></polygon>
						</g>
					</svg></span>
			</a>
			<div class="opacity-50" style="transition:opacity 250ms ease-in-out">
				<div id="react-collapsed-panel-:Rb2m6:" aria-hidden="true" role="region"
					style="box-sizing:border-box;display:none;height:0px;overflow:hidden">
					<ul>
						<li><a title="renderToNodeStream" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/server/renderToNodeStream">
								<div>renderToNodeStream
									<!-- -->
								</div>
							</a></li>
						<li><a title="renderToPipeableStream" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/server/renderToPipeableStream">
								<div>renderToPipeableStream
									<!-- -->
								</div>
							</a></li>
						<li><a title="renderToReadableStream" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/server/renderToReadableStream">
								<div>renderToReadableStream
									<!-- -->
								</div>
							</a></li>
						<li><a title="renderToStaticMarkup" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/server/renderToStaticMarkup">
								<div>renderToStaticMarkup
									<!-- -->
								</div>
							</a></li>
						<li><a title="renderToStaticNodeStream" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/server/renderToStaticNodeStream">
								<div>renderToStaticNodeStream
									<!-- -->
								</div>
							</a></li>
						<li><a title="renderToString" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react-dom/server/renderToString">
								<div>renderToString
									<!-- -->
								</div>
							</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li role="separator" class="mt-4 mb-2 ms-5 border-b border-border dark:border-border-dark"></li>
		<h3 class="mb-1 text-sm font-bold ms-5 text-tertiary dark:text-tertiary-dark mt-2">Legacy APIs</h3>
		<li><a title="Legacy React APIs" target=""
				class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between ps-5 text-base font-bold text-primary dark:text-primary-dark"
				href="/reference/react/legacy">
				<div>Legacy React APIs
					<!-- -->
				</div><span class="pe-1 text-tertiary dark:text-tertiary-dark"><svg xmlns="http://www.w3.org/2000/svg"
						width="20" height="20" viewBox="0 0 20 20"
						class="duration-100 ease-in transition -rotate-90 rtl:rotate-90"
						style="min-width:20px;min-height:20px">
						<g fill="none" fill-rule="evenodd" transform="translate(-446 -398)">
							<path fill="currentColor" fill-rule="nonzero"
								d="M95.8838835,240.366117 C95.3957281,239.877961 94.6042719,239.877961 94.1161165,240.366117 C93.6279612,240.854272 93.6279612,241.645728 94.1161165,242.133883 L98.6161165,246.633883 C99.1042719,247.122039 99.8957281,247.122039 100.383883,246.633883 L104.883883,242.133883 C105.372039,241.645728 105.372039,240.854272 104.883883,240.366117 C104.395728,239.877961 103.604272,239.877961 103.116117,240.366117 L99.5,243.982233 L95.8838835,240.366117 Z"
								transform="translate(356.5 164.5)"></path>
							<polygon points="446 418 466 418 466 398 446 398"></polygon>
						</g>
					</svg></span>
			</a>
			<div class="opacity-50" style="transition:opacity 250ms ease-in-out">
				<div id="react-collapsed-panel-:Rbim6:" aria-hidden="true" role="region"
					style="box-sizing:border-box;display:none;height:0px;overflow:hidden">
					<ul>
						<li><a title="Children" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/Children">
								<div>Children
									<!-- -->
								</div>
							</a></li>
						<li><a title="cloneElement" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/cloneElement">
								<div>cloneElement
									<!-- -->
								</div>
							</a></li>
						<li><a title="Component" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/Component">
								<div>Component
									<!-- -->
								</div>
							</a></li>
						<li><a title="createElement" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/createElement">
								<div>createElement
									<!-- -->
								</div>
							</a></li>
						<li><a title="createFactory" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/createFactory">
								<div>createFactory
									<!-- -->
								</div>
							</a></li>
						<li><a title="createRef" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/createRef">
								<div>createRef
									<!-- -->
								</div>
							</a></li>
						<li><a title="isValidElement" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/isValidElement">
								<div>isValidElement
									<!-- -->
								</div>
							</a></li>
						<li><a title="PureComponent" target=""
								class="p-2 pe-2 w-full rounded-none lg:rounded-e-2xl text-start hover:bg-gray-5 dark:hover:bg-gray-80 relative flex items-center justify-between text-sm ps-6 ps-5 text-base text-secondary dark:text-secondary-dark"
								href="/reference/react/PureComponent">
								<div>PureComponent
									<!-- -->
								</div>
							</a></li>
					</ul>
				</div>
			</div>
		</li>
	</ul>
	<!--/$-->
	<div class="h-20"></div>
</nav>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<?= $this->endSection() ?>