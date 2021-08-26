#!/bin/bash
# 
#
# Author : Arvan (shiraoka) < jangan ganti copyright kooontool
# FB     : fb.com/sh1raoka
# Github : github.com/nako48
#
#
smtpaws(){
	function=$(timeout 20 php configv1.php "$1")
	if [[ $function =~ "Terkirim" ]]; then
		echo -e "SMTP Send Success -> $1 (Sent By Michael Nics)"
		echo "$1" >> awssmtp.txt
	elif [[ $function =~ "554 Message rejected: Sending paused for this account." ]]; then
		echo -e "SMTP Sending Paused AWS ONLY -> $1 (Checked On Tatsumi Crew)"
	elif [[ $function =~ "Email address is not verified" ]]; then
		echo -e "Email Not Verified -> $1 (Checked On Tatsumi Crew)"
		echo "$1" >> emailerror.txt
	else
		echo -e "SMTP FAILED SENDING -> $1 (Checked On Tatsumi Crew)"
	fi
}
othersmtp(){
	function=$(timeout 15 php configv2.php "$1")
	if [[ $function =~ "Terkirim" ]]; then
		echo -e "SMTP Send Success -> $1 (Checked On Tatsumi Crew)"
		echo "$1" >> othersmtp.txt
	else
		echo -e "SMTP FAILED SENDING -> $1 (Checked On Tatsumi Crew)"
	fi
}
cat << "EOF"
  / _ \
\_\(_)/_/
 _//"\\_  SMTP Mass Checker By Tatsumi Crew
  /   \	         Code By Shiraoka
EOF
echo ""
echo "Method : "
echo "1. SMTP CHECKER (AWS)" 
echo "2. SMTP CHECKER (OTHER)" 
read -p "Choose Your Method : " pilihan;
if [ $pilihan -eq 1 ]; then

	read -p "Select Your List : " listo;

	IFS=$'\r\n' GLOBIGNORE='*' command eval 'list=($(cat $listo))'
	for (( i = 0; i < "${#list[@]}"; i++ )); do
		AMPAS="${list[$i]}"
		IFS='' read -r -a array <<< "$AMPAS"
		target=${array[0]}
		((cthread=cthread%1)); ((cthread++==0)) && wait
		smtpaws ${target} &
	done
	wait
elif [ $pilihan -eq "2" ]; then

	read -p "Select Your List : " listo;

	IFS=$'\r\n' GLOBIGNORE='*' command eval 'list=($(cat $listo))'
	for (( i = 0; i < "${#list[@]}"; i++ )); do
		AMPAS="${list[$i]}"
		IFS='' read -r -a array <<< "$AMPAS"
		target=${array[0]}
		((cthread=cthread%1)); ((cthread++==0)) && wait
		othersmtp ${target} &
	done
	wait
fi