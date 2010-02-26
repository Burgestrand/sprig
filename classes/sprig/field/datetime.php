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
        public $default = NULL;
        
        /**
         * Returns the fields’ value in local timezone
         * 
         * @param value
         * @return time
         */
        public function value($value)
        {
            $format = 'Y-m-d H:i:s';
            $value = parent::value($value);
            
            if (is_null($value))
            {
                return gmdate($format);
            }
            elseif (is_int($value))
            {
                return gmdate($format, $value);
            }
            else
            {
                return date($format, strtotime($value . ' +0000'));
            }
        }
    }
    
/* End of file datetime.php */
/* Location: ./application/classes/sprig/field/datetime.php */ 