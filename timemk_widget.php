<?php
/*
Plugin Name: TIME.mk Widget
Plugin URI: http://kuzmanov.info/timemk-widget
Description: Бидете во чекор со најновите наслови на Time.mk. Одберете категорија од ваш интерес, број на наслови, хоризонтален или вертикален тип, скопирајте го прикажаниот код на посакуваното место и следете ги најновите наслови на Time.mk на вашата страница.
Version: 1.0
Author: Boris Kuzmanov
Author URI: http://kuzmanov.info
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

add_action('widgets_init', 'timemk_widget');

function timemk_widget() {
	register_widget('TIMEMK_Widget');
}

class TIMEMK_Widget extends WP_Widget {

	function TIMEMK_Widget() {
		$widget_ops = array('classname' => 'timemk', 'description' => __('Бидете во тек со најновите наслови на Time.mk.', 'timemk'));	
		$control_ops = array('width' => 300, 'height' => 350, 'id_base' => 'timemk-widget');
		$this->WP_Widget('timemk-widget', __('TIME.MK Widget', 'timemk'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);

		$title = apply_filters('widget_title', $instance['title']);
		$tip = $instance['tip'];
		$kategorija = $instance['kategorija'];
		$brVesti = $instance['brVesti'];
		
		echo $before_widget;

		if ($title)
			echo $before_title . $title . $after_title;

		if($tip == 'Вертикален') {
			$sirina = '300px';
			$neshto = '';
			switch($brVesti) {
				case 3:
					$visina = '317px';
					break;
				case 4:
					$visina = '400px';
					break;
				case 5:
					$visina = '483px';
					break;
				case 8:
					$visina = '782px';
					break;
			}
		}		
		if($tip == 'Хоризонтален') {
			$neshto = 'h';
			$sirina = '986px';
			$visina = '208px';
			$brVesti = 5;
		}
			
		switch($kategorija) {
			case 'ВЕСТИ':
				$kat = 'vesti';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'ЖИВОТ':
				$kat = 'zivot';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'СПОРТ':
				$kat = 'sport';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Македонија':
				$kat = 'makedonija';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Економија':
				$kat = 'ekonomija';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Балкан':
				$kat = 'balkan';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Свет':
				$kat = 'svet';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Скопје':
				$kat = 'skopje';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Црна Хроника':
				$kat = 'hronika';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Република':
				$kat = 'republika';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Култура':
				$kat = 'kultura';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Наука / Технологија':
				$kat = 'tehnologija';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Сцена':
				$kat = 'scena';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Занимливости / Забава':
				$kat = 'fun';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Авотомобили / Мотори':
				$kat = 'avto';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Музика':
				$kat = 'muzika';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Филм':
				$kat = 'film';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Живот / Уметност':
				$kat = 'life';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Патувања':
				$kat = 'patuvanja';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Здравје':
				$kat = 'zdravje';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Храна / Фитнес':
				$kat = 'hrana';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Убавина / Стил / Мода':
				$kat = 'style';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Интима':
				$kat = 'sex';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Фудбал':
				$kat = 'fudbal';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Кошарка':
				$kat = 'kosarka';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Ракомет':
				$kat = 'rakomet';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Автомото':
				$kat = 'avtomoto';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Тенис':
				$kat = 'tenis';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			case 'Останато':
				$kat = 'sportdrugo';
				printf('<iframe frameborder="0" seamless src="http://www.time.mk/widget/'.$kat.''.$brVesti.''.$neshto.'" height="'.$visina.'" width="'.$sirina.'"></iframe>');
				break;
			default:
				printf('<font color="red">TIME.MK виџетот можете да го поставите преку Изглед -> Елементи.</font>');
				break;
		}	

		
		echo $after_widget;
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['tip'] = strip_tags($new_instance['tip']);
		$instance['kategorija'] = strip_tags($new_instance['kategorija']);
		$instance['brVesti'] = strip_tags($new_instance['brVesti']);
		return $instance;
	}

	
	function form($instance) {
		$defaults = array('title' => __('TIME.MK', 'timemk'));
		$instance = wp_parse_args((array) $instance, $defaults); ?>

		<strong>Наслов:</strong>
		<p>
			<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
		</p>

		<strong>Тип:</strong>
		<p>
		<select name="<?php echo $this->get_field_name('tip'); ?>" id="<?php echo $this->get_field_id('tip'); ?>" class="widefat"> 
			<?php $options = array('Вертикален', 'Хоризонтален'); foreach ($options as $option) { 
				echo '<option value="' . $option . '" id="' . $option . '"', $tip == $option ? ' selected="selected"' : '', '>', $option, '</option>'; 
			} ?> 
		</select>
		</p>
		
		<strong>Категорија:</strong>
		<p>
		<select name="<?php echo $this->get_field_name('kategorija'); ?>" id="<?php echo $this->get_field_id('kategorija'); ?>" class="widefat"> 
			<?php $options = array('ВЕСТИ', 'ЖИВОТ', 'СПОРТ', 'Македонија','Економија','Балкан','Свет','Скопје','Црна Хроника','Република','Култура','Наука / Технологија','Сцена','Занимливости / Забава','Автомобили / Мотори','Музика','Филм','Живот / Уметност','Патувања','Здравје','Храна / Фитнес','Убавина / Стил / Мода', 'Интима', 'Фудбал', 'Кошарка', 'Ракомет', 'Автомото', 'Тенис', 'Останато'); foreach ($options as $option) { 
				echo '<option value="' . $option . '" id="' . $option . '"', $kategorija == $option ? ' selected="selected"' : '', '>', $option, '</option>'; 
			} ?> 
		</select>	
		</p>

		<strong>Број на вести</strong>
		<p>
		<select name="<?php echo $this->get_field_name('brVesti'); ?>" id="<?php echo $this->get_field_id('brVesti'); ?>" class="widefat"> 
			<?php $options = array('3', '4', '5', '8'); foreach ($options as $option) { 
				echo '<option value="' . $option . '" id="' . $option . '"', $brVesti == $option ? ' selected="selected"' : '', '>', $option, '</option>'; 
			} ?> 
		</select>
		</p>

	<?php
	}
}

?>