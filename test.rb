for i in 1..9 do
	for x in 1..9 do
		if x == 9 && (i * x) < 10
		  print (i * x).to_s + "  \n"
		elsif (i * x) < 10
			print (i * x).to_s + '  '
		elsif x == 9
			print (i * x).to_s + " \n"
    else
    	print (i * x).to_s + ' '
    end
	end
end