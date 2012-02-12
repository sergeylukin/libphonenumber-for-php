<?php

namespace com\google\i18n\phonenumbers;

class PhoneMetadata {

	/**
	 * @var string
	 */
	private $id = NULL;

	/**
	 *
	 * @return boolean
	 */
	public function hasId() {
		return isset($this->id);
	}

	/**
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 *
	 * @param string $value
	 * @return PhoneMetadata
	 */
	public function setId($value) {
		$this->id = $value;
		return $this;
	}

	/**
	 *
	 * @var int
	 */
	private $countryCode = NULL;

	/**
	 *
	 * @return boolean
	 */
	public function hasCountryCode() {
		return isset($this->countryCode);
	}

	/**
	 *
	 * @return int
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}

	/**
	 *
	 * @param int $value
	 * @return PhoneMetadata
	 */
	public function setCountryCode($value) {
		$this->countryCode = $value;
		return $this;
	}

	private $leadingDigits = NULL;

	public function hasLeadingDigits() {
		return isset($this->leadingDigits);
	}

	public function getLeadingDigits() {
		return $this->leadingDigits;
	}

	public function setLeadingDigits($value) {
		$this->leadingDigits = $value;
		return $this;
	}

	private $internationalPrefix = NULL;

	public function hasInternationalPrefix() {
		return isset($this->internationalPrefix);
	}

	public function getInternationalPrefix() {
		return $this->internationalPrefix;
	}

	public function setInternationalPrefix($value) {
		$this->internationalPrefix = $value;
		return $this;
	}

	private $preferredInternationalPrefix = "";

	public function hasPreferredInternationalPrefix() {
		return isset($this->preferredInternationalPrefix);
	}

	public function getPreferredInternationalPrefix() {
		return $this->preferredInternationalPrefix;
	}

	public function setPreferredInternationalPrefix($value) {
		$this->preferredInternationalPrefix = $value;
		return $this;
	}

	private $nationalPrefixForParsing = NULL;

	public function hasNationalPrefixForParsing() {
		return isset($this->nationalPrefixForParsing);
	}

	public function getNationalPrefixForParsing() {
		return $this->nationalPrefixForParsing;
	}

	public function setNationalPrefixForParsing($value) {
		$this->nationalPrefixForParsing = $value;
		return $this;
	}

	private $nationalPrefixTransformRule = NULL;

	public function hasNationalPrefixTransformRule() {
		return isset($this->nationalPrefixTransformRule);
	}

	public function getNationalPrefixTransformRule() {
		return $this->nationalPrefixTransformRule;
	}

	public function setNationalPrefixTransformRule($value) {
		$this->nationalPrefixTransformRule = $value;
		return $this;
	}

	private $nationalPrefix = NULL;

	public function hasNationalPrefix() {
		return isset($this->nationalPrefix);
	}

	public function getNationalPrefix() {
		return $this->nationalPrefix;
	}

	public function setNationalPrefix($value) {
		$this->nationalPrefix = $value;
		return $this;
	}

	private $preferredExtnPrefix = NULL;

	public function hasPreferredExtnPrefix() {
		return isset($this->preferredExtnPrefix);
	}

	public function getPreferredExtnPrefix() {
		return $this->preferredExtnPrefix;
	}

	public function setPreferredExtnPrefix($value) {
		$this->preferredExtnPrefix = $value;
		return $this;
	}

	private $mainCountryForCode = NULL;

	public function hasMainCountryForCode() {
		return isset($this->mainCountryForCode);
	}

	public function isMainCountryForCode() {
		return $this->mainCountryForCode;
	}

	// Method that lets this class have the same interface as the one generated by Protocol Buffers
	// which is used by C++ build tools.
	public function getMainCountryForCode() {
		return $this->mainCountryForCode;
	}

	public function setMainCountryForCode($value) {
		$this->mainCountryForCode = $value;
		return $this;
	}

	private $leadingZeroPossible = NULL;

	public function hasLeadingZeroPossible() {
		return isset($this->leadingZeroPossible);
	}

	public function isLeadingZeroPossible() {
		return $this->leadingZeroPossible;
	}

	public function setLeadingZeroPossible($value) {
		$this->leadingZeroPossible = $value;
		return $this;
	}

	private $generalDesc = null;

	public function hasGeneralDesc() {
		return isset($this->generalDesc);
	}

	/**
	 *
	 * @return PhoneNumberDesc 
	 */
	public function getGeneralDesc() {
		return $this->generalDesc;
	}

	public function setGeneralDesc(PhoneNumberDesc $value) {
		$this->generalDesc = $value;
		return $this;
	}

	/**
	 *
	 * @var PhoneNumberDesc
	 */
	private $mobile = null;

	public function hasMobile() {
		return isset($this->mobile);
	}

	/**
	 *
	 * @return PhoneNumberDesc
	 */
	public function getMobile() {
		return $this->mobile;
	}

	public function setMobile(PhoneNumberDesc $value) {
		$this->mobile = $value;
		return $this;
	}

	private $premiumRate = null;

	public function hasPremiumRate() {
		return isset($this->premiumRate);
	}

	public function getPremiumRate() {
		return $this->premiumRate;
	}

	public function setPremiumRate(PhoneNumberDesc $value) {
		$this->premiumRate = $value;
		return $this;
	}

	private $fixedLine = null;

	public function hasFixedLine() {
		return isset($this->fixedLine);
	}

	public function getFixedLine() {
		return $this->fixedLine;
	}

	public function setFixedLine(PhoneNumberDesc $value) {
		$this->fixedLine = $value;
		return $this;
	}

	private $sameMobileAndFixedLinePattern = NULL;

	public function hasSameMobileAndFixedLinePattern() {
		return isset($this->sameMobileAndFixedLinePattern);
	}

	public function isSameMobileAndFixedLinePattern() {
		return $this->sameMobileAndFixedLinePattern;
	}

	public function setSameMobileAndFixedLinePattern($value) {
		$this->sameMobileAndFixedLinePattern = $value;
		return $this;
	}

	private $tollFree = NULL;

	public function hasTollFree() {
		return isset($this->tollFree);
	}

	public function getTollFree() {
		return $this->tollFree;
	}

	public function setTollFree(PhoneNumberDesc $value) {
		$this->tollFree = $value;
		return $this;
	}

	/*

	  // required PhoneNumberDesc shared_cost = 6;
	  private boolean hasSharedCost;
	  private PhoneNumberDesc sharedCost_ = null;
	  public boolean hasSharedCost() { return hasSharedCost; }
	  public PhoneNumberDesc getSharedCost() { return sharedCost_; }
	  public PhoneMetadata setSharedCost(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasSharedCost = true;
	  sharedCost_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc personal_number = 7;
	  private boolean hasPersonalNumber;
	  private PhoneNumberDesc personalNumber_ = null;
	  public boolean hasPersonalNumber() { return hasPersonalNumber; }
	  public PhoneNumberDesc getPersonalNumber() { return personalNumber_; }
	  public PhoneMetadata setPersonalNumber(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasPersonalNumber = true;
	  personalNumber_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc voip = 8;
	  private boolean hasVoip;
	  private PhoneNumberDesc voip_ = null;
	  public boolean hasVoip() { return hasVoip; }
	  public PhoneNumberDesc getVoip() { return voip_; }
	  public PhoneMetadata setVoip(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasVoip = true;
	  voip_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc pager = 21;
	  private boolean hasPager;
	  private PhoneNumberDesc pager_ = null;
	  public boolean hasPager() { return hasPager; }
	  public PhoneNumberDesc getPager() { return pager_; }
	  public PhoneMetadata setPager(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasPager = true;
	  pager_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc uan = 25;
	  private boolean hasUan;
	  private PhoneNumberDesc uan_ = null;
	  public boolean hasUan() { return hasUan; }
	  public PhoneNumberDesc getUan() { return uan_; }
	  public PhoneMetadata setUan(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasUan = true;
	  uan_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc voicemail = 28;
	  private boolean hasVoicemail;
	  private PhoneNumberDesc voicemail_ = null;
	  public boolean hasVoicemail() { return hasVoicemail; }
	  public PhoneNumberDesc getVoicemail() { return voicemail_; }
	  public PhoneMetadata setVoicemail(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasVoicemail = true;
	  voicemail_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc emergency = 27;
	  private boolean hasEmergency;
	  private PhoneNumberDesc emergency_ = null;
	  public boolean hasEmergency() { return hasEmergency; }
	  public PhoneNumberDesc getEmergency() { return emergency_; }
	  public PhoneMetadata setEmergency(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasEmergency = true;
	  emergency_ = $value;
	  return this;
	  }

	  // required PhoneNumberDesc noInternationalDialling = 24;
	  private boolean hasNoInternationalDialling;
	  private PhoneNumberDesc noInternationalDialling_ = null;
	  public boolean hasNoInternationalDialling() { return hasNoInternationalDialling; }
	  public PhoneNumberDesc getNoInternationalDialling() { return noInternationalDialling_; }
	  public PhoneMetadata setNoInternationalDialling(PhoneNumberDesc value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  hasNoInternationalDialling = true;
	  noInternationalDialling_ = $value;
	  return this;
	  }

	  // repeated NumberFormat number_format = 19;
	  private java.util.List<NumberFormat> numberFormat_ = new java.util.ArrayList<NumberFormat>();
	  public java.util.List<NumberFormat> numberFormats() {
	  return numberFormat_;
	  }
	  public int numberFormatSize() { return numberFormat_.size(); }
	  public NumberFormat getNumberFormat(int index) {
	  return numberFormat_.get(index);
	  }
	  public PhoneMetadata addNumberFormat(NumberFormat value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  numberFormat_.add(value);
	  return this;
	  }

	  // repeated NumberFormat intl_number_format = 20;
	  private java.util.List<NumberFormat> intlNumberFormat_ =
	  new java.util.ArrayList<NumberFormat>();
	  public java.util.List<NumberFormat> intlNumberFormats() {
	  return intlNumberFormat_;
	  }
	  public int intlNumberFormatSize() { return intlNumberFormat_.size(); }
	  public NumberFormat getIntlNumberFormat(int index) {
	  return intlNumberFormat_.get(index);
	  }

	  public PhoneMetadata addIntlNumberFormat(NumberFormat value) {
	  if (value == null) {
	  throw new NullPointerException();
	  }
	  intlNumberFormat_.add(value);
	  return this;
	  }
	  public PhoneMetadata clearIntlNumberFormat() {
	  intlNumberFormat_.clear();
	  return this;
	  }
	 */

	public function toArray() {
		$output = array();

		if ($this->hasGeneralDesc()) {
			$output['generalDesc'] = $this->getGeneralDesc()->toArray();
		}

		if ($this->hasFixedLine()) {
			$output['fixedLine'] = $this->getFixedLine()->toArray();
		}

		if ($this->hasMobile()) {
			$output['mobile'] = $this->getMobile()->toArray();
		}

		if ($this->hasTollFree()) {
			$output['tollFree'] = $this->getTollFree()->toArray();
		}

		if ($this->hasPremiumRate()) {
			$output['premiumRate'] = $this->getPremiumRate()->toArray();
		}

		if ($this->hasPremiumRate()) {
			$output['premiumRate'] = $this->getPremiumRate()->toArray();
		}
		/*
		  objectOutput.writeBoolean(hasSharedCost);
		  if (hasSharedCost) {
		  sharedCost_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasPersonalNumber);
		  if (hasPersonalNumber) {
		  personalNumber_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasVoip);
		  if (hasVoip) {
		  voip_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasPager);
		  if (hasPager) {
		  pager_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasUan);
		  if (hasUan) {
		  uan_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasVoicemail);
		  if (hasVoicemail) {
		  voicemail_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasEmergency);
		  if (hasEmergency) {
		  emergency_.writeExternal(objectOutput);
		  }
		  objectOutput.writeBoolean(hasNoInternationalDialling);
		  if (hasNoInternationalDialling) {
		  noInternationalDialling_.writeExternal(objectOutput);
		  }
		 */

		$output['id'] = $this->getId();
		$output['countryCode'] = $this->getCountryCode();
		$output['internationalPrefix'] = $this->getInternationalPrefix();

		if ($this->hasPreferredInternationalPrefix()) {
			$output['preferredInternationalPrefix'] = $this->getPreferredInternationalPrefix();
		}

		if ($this->hasNationalPrefix()) {
			$output['nationalPrefix'] = $this->getNationalPrefix();
		}

		if ($this->hasPreferredExtnPrefix()) {
			$output['preferredExtnPrefix'] = $this->getPreferredExtnPrefix();
		}

		if ($this->hasNationalPrefixForParsing()) {
			$output['nationalPrefixForParsing'] = $this->getNationalPrefixForParsing();
		}

		if ($this->hasNationalPrefixTransformRule()) {
			$output['nationalPrefixTransformRule'] = $this->getNationalPrefixTransformRule();
		}

		$output['sameMobileAndFixedLinePattern'] = $this->isSameMobileAndFixedLinePattern();

		/*

		  int numberFormatSize = numberFormatSize();
		  objectOutput.writeInt(numberFormatSize);
		  for (int i = 0; i < numberFormatSize; i++) {
		  numberFormat_.get(i).writeExternal(objectOutput);
		  }

		  int intlNumberFormatSize = intlNumberFormatSize();
		  objectOutput.writeInt(intlNumberFormatSize);
		  for (int i = 0; i < intlNumberFormatSize; i++) {
		  intlNumberFormat_.get(i).writeExternal(objectOutput);
		  }
		 */
		$output['mainCountryForCode'] = $this->getMainCountryForCode();

		if ($this->hasLeadingDigits()) {
			$output['leadingDigits'] = $this->getLeadingDigits();
		}

		/* 		
		  objectOutput.writeBoolean(leadingZeroPossible_);
		 */


		return $output;
	}

	public function fromArray(array $input) {

		if (isset($input['generalDesc'])) {
			$desc = new PhoneNumberDesc();
			$this->setGeneralDesc($desc->fromArray($input['generalDesc']));
		}

		if (isset($input['fixedLine'])) {
			$desc = new PhoneNumberDesc();
			$this->setFixedLine($desc->fromArray($input['fixedLine']));
		}

		if (isset($input['mobile'])) {
			$desc = new PhoneNumberDesc();
			$this->setMobile($desc->fromArray($input['mobile']));
		}

		if (isset($input['tollFree'])) {
			$desc = new PhoneNumberDesc();
			$this->setTollFree($desc->fromArray($input['tollFree']));
		}

		if (isset($input['premiumRate'])) {
			$desc = new PhoneNumberDesc();
			$this->setPremiumRate($desc->fromArray($input['premiumRate']));
		}

		/*
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setSharedCost(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setPersonalNumber(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setVoip(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setPager(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setUan(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setVoicemail(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setEmergency(desc);
		  }
		  hasDesc = objectInput.readBoolean();
		  if (hasDesc) {
		  PhoneNumberDesc desc = new PhoneNumberDesc();
		  desc.readExternal(objectInput);
		  setNoInternationalDialling(desc);
		  }

		  setId(objectInput.readUTF());
		  setCountryCode(objectInput.readInt());
		  setInternationalPrefix(objectInput.readUTF());

		  boolean hasString = objectInput.readBoolean();
		  if (hasString) {
		  setPreferredInternationalPrefix(objectInput.readUTF());
		  }

		  hasString = objectInput.readBoolean();
		  if (hasString) {
		  setNationalPrefix(objectInput.readUTF());
		  }

		  hasString = objectInput.readBoolean();
		  if (hasString) {
		  setPreferredExtnPrefix(objectInput.readUTF());
		  }

		  hasString = objectInput.readBoolean();
		  if (hasString) {
		  setNationalPrefixForParsing(objectInput.readUTF());
		  }

		  hasString = objectInput.readBoolean();
		  if (hasString) {
		  setNationalPrefixTransformRule(objectInput.readUTF());
		  }

		  setSameMobileAndFixedLinePattern(objectInput.readBoolean());

		  int nationalFormatSize = objectInput.readInt();
		  for (int i = 0; i < nationalFormatSize; i++) {
		  NumberFormat numFormat = new NumberFormat();
		  numFormat.readExternal(objectInput);
		  numberFormat_.add(numFormat);
		  }

		  int intlNumberFormatSize = objectInput.readInt();
		  for (int i = 0; i < intlNumberFormatSize; i++) {
		  NumberFormat numFormat = new NumberFormat();
		  numFormat.readExternal(objectInput);
		  intlNumberFormat_.add(numFormat);
		  }

		  setMainCountryForCode(objectInput.readBoolean());
		 * 
		 */
		$this->setMainCountryForCode($input['mainCountryForCode']);
		
		if (isset($input['leadingDigits'])) {
			$this->setLeadingDigits($input['leadingDigits']);
		}

		/*
		  setLeadingZeroPossible(objectInput.readBoolean());
		 */
		return $this;
	}

}

class PhoneNumberDesc {

	private $hasNationalNumberPattern;
	private $nationalNumberPattern_ = "";

	public function hasNationalNumberPattern() {
		return $this->hasNationalNumberPattern;
	}

	public function getNationalNumberPattern() {
		return $this->nationalNumberPattern_;
	}

	public function setNationalNumberPattern($value) {
		$this->hasNationalNumberPattern = true;
		$this->nationalNumberPattern_ = $value;
		return $this;
	}

	private $hasPossibleNumberPattern;
	private $possibleNumberPattern_ = "";

	public function hasPossibleNumberPattern() {
		return $this->hasPossibleNumberPattern;
	}

	public function getPossibleNumberPattern() {
		return $this->possibleNumberPattern_;
	}

	public function setPossibleNumberPattern($value) {
		$this->hasPossibleNumberPattern = true;
		$this->PossibleNumberPattern_ = $value;
		return $this;
	}

	private $hasExampleNumber;
	private $exampleNumber_ = "";

	public function hasExampleNumber() {
		return $this->hasExampleNumber;
	}

	public function getExampleNumber() {
		return $this->exampleNumber_;
	}

	public function setExampleNumber($value) {
		$this->hasExampleNumber = true;
		$this->exampleNumber_ = $value;
		return $this;
	}

	public function mergeFrom(PhoneNumberDesc $other) {
		if ($other->hasNationalNumberPattern()) {
			$this->setNationalNumberPattern($other->getNationalNumberPattern());
		}
		if ($other->hasPossibleNumberPattern()) {
			$this->setPossibleNumberPattern($other->getPossibleNumberPattern());
		}
		if ($other->hasExampleNumber()) {
			$this->setExampleNumber($other->getExampleNumber());
		}
		return $this;
	}

	public function toArray() {
		return array(
			'NationalNumberPattern' => $this->getNationalNumberPattern(),
			'PossibleNumberPattern' => $this->getPossibleNumberPattern(),
			'ExampleNumber' => $this->getExampleNumber(),
		);
	}

	public function fromArray(array $input) {
		if (isset($input['NationalNumberPattern'])) {
			$this->setNationalNumberPattern($input['NationalNumberPattern']);
		}
		if (isset($input['PossibleNumberPattern'])) {
			$this->setPossibleNumberPattern($input['PossibleNumberPattern']);
		}
		if (isset($input['ExampleNumber'])) {
			$this->setExampleNumber($input['ExampleNumber']);
		}
		return $this;
	}

}