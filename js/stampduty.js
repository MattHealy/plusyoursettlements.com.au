

function CalculateStampDuty(rateType,value) {

    var stampDuty = 0;

    value = Number(value.replace(/[^0-9\.]+/g,""));
    value = parseInt(value);

    // http://www.finance.wa.gov.au/cms/content.aspx?id=2071
    if (rateType == 'residential') {

          if (value >= 0 && value <= 120000) {

               stampDuty = 1.9 * (value / 100);

          } else if (value >= 120001 && value <= 150000) {

               stampDuty = 2280 + (2.85 * ((value - 120000) / 100));

          } else if (value >= 150001 && value <= 360000) {

               stampDuty = 3135 + (3.8 * ((value - 150000) / 100));

          } else if (value >= 360001 && value <= 725000) {

               stampDuty = 11115 + (4.75 * ((value - 360000) / 100));

          } else if (value >= 725001) {

               stampDuty = 28453 + (5.15 * ((value - 725000) / 100));

          }

    } else if (rateType == 'fhor_established') {

          // Only applies to properties up to $600,000

          // http://www.finance.wa.gov.au/cms/content.aspx?id=2011
          if (value >= 0 && value <= 500000) {

               stampDuty = 0;

          } else if (value > 500000 && value <= 600000) {

               stampDuty = 22.51 * ((value - 500000) / 100);

          }

    } else if (rateType == 'fhor_vacant') {

          // Only applies to land up to $400,000

          // http://www.finance.wa.gov.au/cms/content.aspx?id=2011
          if (value >= 0 && value <= 300000) {

               stampDuty = 0;
    
          } else if (value > 300000 && value <= 400000) {
    
               stampDuty = 13.01 * ((value - 300000) / 100);

          }

    } else if (rateType == 'concessional') {

          // Only applies to properties less than $200,000

          // http://www.finance.wa.gov.au/cms/content.aspx?id=2054

          if (value >= 0 && value <= 100000) {

               stampDuty = 1.5 * (value / 100);
   
          } else if (value > 100000 && value <= 200000) {
   
               stampDuty = 1500 + (4.39 * (value / 100));

          }

    } else if (rateType == 'general') {

          // http://www.finance.wa.gov.au/cms/content.aspx?id=2063

          if (value >= 0 && value <= 80000) {

               stampDuty = 1.9 * (value / 100);
  
          } else if (value >= 80001 && value <= 100000) {
  
               stampDuty = 1520 + (2.85 * ((value - 80000) / 100));

          } else if (value >= 100001 && value <= 250000) {
  
               stampDuty = 2090 + (3.8 * ((value - 100000) / 100));

          } else if (value >= 250001 && value <= 500000) {
  
               stampDuty = 7790 + (4.75 * ((value - 250000) / 100));

          } else if (value >= 500001) {
  
               stampDuty = 19665 + (5.15 * ((value - 500000) / 100));

          }

    }

    stampDuty = CurrencyFormatted(stampDuty);
    stampDuty = CommaFormatted(stampDuty);

    stampDuty = '$' + stampDuty;

    return(stampDuty);

}

// function CurrencyFormatted taken from http://www.web-source.net/web_development/currency_formatting.htm
// MH 18th February 2012
function CurrencyFormatted(amount)
{
	var i = parseFloat(amount);
	if(isNaN(i)) { i = 0.00; }
	var minus = '';
	if(i < 0) { minus = '-'; }
	i = Math.abs(i);
	i = parseInt((i + .005) * 100);
	i = i / 100;
	s = new String(i);
	if(s.indexOf('.') < 0) { s += '.00'; }
	if(s.indexOf('.') == (s.length - 2)) { s += '0'; }
	s = minus + s;
	return s;
}

// function CommaFormatted taken from http://www.web-source.net/web_development/currency_formatting.htm
// MH 18th February 2012
function CommaFormatted(amount)
{
	var delimiter = ","; // replace comma if desired
	var a = amount.split('.',2)
	var d = a[1];
	var i = parseInt(a[0]);
	if(isNaN(i)) { return ''; }
	var minus = '';
	if(i < 0) { minus = '-'; }
	i = Math.abs(i);
	var n = new String(i);
	var a = [];
	while(n.length > 3)
	{
		var nn = n.substr(n.length-3);
		a.unshift(nn);
		n = n.substr(0,n.length-3);
	}
	if(n.length > 0) { a.unshift(n); }
	n = a.join(delimiter);
	if(d.length < 1) { amount = n; }
	else { amount = n + '.' + d; }
	amount = minus + amount;
	return amount;
}


