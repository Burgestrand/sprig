<?php defined('SYSPATH') OR die('No direct access allowed.');
    /**
     * Datetime Sprig Field
     *
     * @package     Sprig
     * @author      Kim Burgestrand
     * @license     X11 License (“MIT”)
     */
    class Sprig_Field_Datetime extends Sprig_Field
    {
        public $format = 'Y-m-d H:i:s';
        public $default = NULL;
        
        /**
         * Returns the fields’ value in local timezone
         * 
         * @param value
         * @return time
         */
        public function value($value)
        {
            $value = parent::value($value);
            
            if (is_null($value))
            {
                return gmdate('Y-m-d H:i:s');
            }
            
            return date($this->format, strtotime($value . ' +0000'));
        }
    }
    
/* End of file datetime.php */
/* Location: ./application/classes/sprig/field/datetime.php */ 