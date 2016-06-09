<?php
// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile


use \Codeception\Maybe;

/**
 * Inherited methods
 * @method void execute($callable)
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void offsetGet($offset)
 * @method void offsetSet($offset, $value)
 * @method void offsetExists($offset)
 * @method void offsetUnset($offset)
*/

class CodeGuy extends \Codeception\AbstractGuy
{

    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::addWrongLogstashLog()
     * @return \Codeception\Maybe
     */
    public function addWrongLogstashLog($message) {
        $this->scenario->addStep(new \Codeception\Step\Action('addWrongLogstashLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::addElasticsearchLog()
     * @return \Codeception\Maybe
     */
    public function addElasticsearchLog($message) {
        $this->scenario->addStep(new \Codeception\Step\Action('addElasticsearchLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::addLogstashFileLog()
     * @return \Codeception\Maybe
     */
    public function addLogstashFileLog($message, $type) {
        $this->scenario->addStep(new \Codeception\Step\Action('addLogstashFileLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\CodeHelper::seeLogstashFile()
     * @return \Codeception\Maybe
     */
    public function canSeeLogstashFile() {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeLogstashFile', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::seeLogstashFile()
     * @return \Codeception\Maybe
     */
    public function seeLogstashFile() {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeLogstashFile', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::addRedisLog()
     * @return \Codeception\Maybe
     */
    public function addRedisLog($message) {
        $this->scenario->addStep(new \Codeception\Step\Action('addRedisLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::addWrongRedisLog()
     * @return \Codeception\Maybe
     */
    public function addWrongRedisLog($message) {
        $this->scenario->addStep(new \Codeception\Step\Action('addWrongRedisLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::addWrongElasticsearchLog()
     * @return \Codeception\Maybe
     */
    public function addWrongElasticsearchLog($message) {
        $this->scenario->addStep(new \Codeception\Step\Action('addWrongElasticsearchLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\CodeHelper::dontSeeEmergencyLog()
     * @return \Codeception\Maybe
     */
    public function cantSeeEmergencyLog() {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('dontSeeEmergencyLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::dontSeeEmergencyLog()
     * @return \Codeception\Maybe
     */
    public function dontSeeEmergencyLog() {
        $this->scenario->addStep(new \Codeception\Step\Assertion('dontSeeEmergencyLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::flushElasticsearch()
     * @return \Codeception\Maybe
     */
    public function flushElasticsearch() {
        $this->scenario->addStep(new \Codeception\Step\Action('flushElasticsearch', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::flushRedis()
     * @return \Codeception\Maybe
     */
    public function flushRedis() {
        $this->scenario->addStep(new \Codeception\Step\Action('flushRedis', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::removeEmergencyLog()
     * @return \Codeception\Maybe
     */
    public function removeEmergencyLog() {
        $this->scenario->addStep(new \Codeception\Step\Action('removeEmergencyLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::removeLogstashFile()
     * @return \Codeception\Maybe
     */
    public function removeLogstashFile() {
        $this->scenario->addStep(new \Codeception\Step\Action('removeLogstashFile', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\CodeHelper::seeElasticsearchLog()
     * @return \Codeception\Maybe
     */
    public function canSeeElasticsearchLog($message) {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeElasticsearchLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::seeElasticsearchLog()
     * @return \Codeception\Maybe
     */
    public function seeElasticsearchLog($message) {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeElasticsearchLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\CodeHelper::seeEmergencyLog()
     * @return \Codeception\Maybe
     */
    public function canSeeEmergencyLog($message) {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeEmergencyLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::seeEmergencyLog()
     * @return \Codeception\Maybe
     */
    public function seeEmergencyLog($message) {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeEmergencyLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\CodeHelper::seeRedisLog()
     * @return \Codeception\Maybe
     */
    public function canSeeRedisLog($message) {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeRedisLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module\CodeHelper::seeRedisLog()
     * @return \Codeception\Maybe
     */
    public function seeRedisLog($message) {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeRedisLog', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }


    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module::getName()
     * @return \Codeception\Maybe
     */
    public function getName() {
        $this->scenario->addStep(new \Codeception\Step\Action('getName', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
}

