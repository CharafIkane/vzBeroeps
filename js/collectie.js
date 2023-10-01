let { data: collectie, error } = await supabase.from("collectie").select("*");
