<?php

/**
 * @Author: Mr.Mao
 * @Date:   2021-09-22 14:24:07
 * @Last Modified by:   Mr.Mao
 * @Last Modified time: 2021-09-22 14:40:36
 */
namespace FormBuilder;

/**
 * Class Form
 *
 * @package FormBuilder
 */
class Form
{
	/**
	 * [$name name]
	 * @var string
	 */
	protected $name = '';
	/**
	 * [$title title]
	 * @var string
	 */
	protected $title = '';
	/**
	 * [$type type]
	 * @var string
	 */
	protected $type = 'text';
	/**
	 * [$value value]
	 * @var string
	 */
	protected $value = '';
	/**
	 * [$option option]
	 * @var array
	 */
	protected $option = [];
	/**
	 * [$placeholder placeholder]
	 * @var string
	 */
	protected $placeholder = '';
	/**
	 * [$tip tip]
	 * @var string
	 */
	protected $tip = '';
	/**
	 * [$must must]
	 * @var boolean
	 */
	protected $must = false;
	
	/**
     * 生成表单规则
     *
     * @return array
     */
    public function build()
    {
        return [
            'name' => $this->name,
            'title' => $this->title,
            'type' => $this->type,
            'value' => $this->value,
            'option' => $this->option,
            'placeholder' => $this->placeholder,
            'tip' => $this->tip,
            'must' => $this->must
        ];
    }
    public function option($option = [])
    {
    	$this->option = $option;
    	return $this;
    }
    public function placeholder($placeholder = '')
    {
    	$this->placeholder = $placeholder;
    	return $this;
    }
}