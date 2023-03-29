<?php

class SideMenu{

	private $CI;



	private $menuList;



	public function __construct($menuList = array()){
		$this->CI =& get_instance(); 
		$this->menuList = $menuList;



		return $this->generate();

	}



	public function generate($active=''){
		$admin = $this->CI->session->userdata('admin');
		$user = $this->CI->session->userdata('user');
		$menu['id_role'] = ($admin ? $admin['id_role'] : $user['id_role']);
		
		$html = '<ul class="sidebar-wrapper">';
		
		foreach ($this->menuList as $keyGroup => $valueGroup) {
			$icon = (isset($valueGroup['icon'])) ? '<i class="fa fa-'.$valueGroup['icon'].' icon"></i>' : '';

			if(in_array($menu['id_role'], $valueGroup['role'])){
				if(isset($valueGroup['title'])){
					$arrow = (isset($valueGroup['list'])) ? '<span class="pull-right spin">
									<i class="fa fa-angle-down text"></i>
								</span>' : '';
					$has_child = (count($valueGroup['list'])>0) ? 'has-child' : ''; 
					$target = ($valueGroup['target'] =='') ? '' : 'target="'+$valueGroup['target']+'"';
					$html .= '<li class="sidebar-list '.$has_child.'">
								<a href="'.(($valueGroup['url']!='')?$valueGroup['url']:'').'" '.$target.' class="sidebar-heading">
									'.$icon.'
									'.$arrow.'
									<span>'.$valueGroup['title'].'</span>
								</a>';				}	
				if(isset($valueGroup['list'])){
					$html .= '<ul class="sidebar-menu is-dropdown">';
					foreach ($valueGroup['list'] as $key => $value) {
						if(in_array($menu['id_role'], $value['role'])){
							$module = (isset($value['module'])) ? 'id="'.$value['module'].'"' : '';
							$html .= '	<li class="sidebar-menu-item" '.$module.'>
											<a href="'.$value['url'].'" class="sidebar-menu-button">
												<i class="fa fa-angle-right"></i>
												<span>'.$value['title'].'</span>
											</a>
										</li>';
						}
					}
					$html .= '</ul>';
				}
				$html .='</li>';
			}
		}

		$html .= '</ul>';

		return $html;

	}



}