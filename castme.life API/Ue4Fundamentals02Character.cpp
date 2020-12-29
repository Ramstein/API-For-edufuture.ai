
AUE4Fundamentals02Character::AUE4Fundamentals02Character()
{
    //#################################################
	// load player attack montage data table #################################
	static ConstructorHelpers::FObjectFinder<UDataTable> PlayerAttackMontageDataObject(TEXT("DataTable'/Game/TUTORIAL_RESOURCES/DataTables/PlayerAttackMontageDataTable.PlayerAttackMontageDataTable'"));
	if (PlayerAttackMontageDataObject.Succeeded())
	{
		PlayerAttackDataTable = PlayerAttackMontageDataObject.Object;
	}
}

//##########################
void AUE4Fundamentals02Character::BeginPlay()
{
	Super::BeginPlay();

	//#############################
	if (PlayerAttackDataTable) {
		FPlayerAttackMontage AttackMontage;
		AttackMontage.Montage = NULL;
		AttackMontage.AnimSectionCount = 10;
		AttackMontage.Description = "Created from the beginplay()";

		PlayerAttackDataTable->AddRow(FName(TEXT("New Row")), AttackMontage);

	}
}

//#######################################################

void AUE4Fundamentals02Character::AttackInput()
{
	Log(ELogLevel::INFO, __FUNCTION__);

	if (PlayerAttackDataTable)
	{
		static const FString ContextString(TEXT("Player Attack Montage Context"));
		FPlayerAttackMontage* AttackMontage = PlayerAttackDataTable->FindRow<FPlayerAttackMontage>(FName(TEXT("Punch1")), ContextString, true);
		if (AttackMontage)
		{
			// generate  number between 1 and whatever is defined in the data table for this montage :
			int MontageSectionIndex = rand() % AttackMontage->AnimSectionCount + 1;

			// create a montage section
			FString MontageSection = "start_" + FString::FromInt(MontageSectionIndex);

			PlayAnimMontage(AttackMontage->Montage, 1.f, FName(*MontageSection));
		}
	}
}





AUE4Fundamentals02Character::AUE4Fundamentals02Character()
{
	// load UserInfoDataTable #################################
	static ConstructorHelpers::FObjectFinder<UDataTable> PlayerAttackMontageDataObject(TEXT("DataTable'/Game/TUTORIAL_RESOURCES/DataTables/PlayerAttackMontageDataTable.PlayerAttackMontageDataTable'"));
	if (PlayerAttackMontageDataObject.Succeeded())
	{
		PlayerAttackDataTable = PlayerAttackMontageDataObject.Object;
	}
}

//##########################
void AUE4Fundamentals02Character::BeginPlay()
{
	Super::BeginPlay();

	//#############################
	if (PlayerAttackDataTable) {
		FPlayerAttackMontage AttackMontage;
		AttackMontage.Montage = NULL;
		AttackMontage.AnimSectionCount = 10;
		AttackMontage.Description = "Created from the beginplay()";

		PlayerAttackDataTable->AddRow(FName(TEXT("New Row")), AttackMontage);

	}
}

//#######################################################

void AUE4Fundamentals02Character::AttackInput()
{
	Log(ELogLevel::INFO, __FUNCTION__);

	if (PlayerAttackDataTable)
	{
		static const FString ContextString(TEXT("Player Attack Montage Context"));
		FPlayerAttackMontage* AttackMontage = PlayerAttackDataTable->FindRow<FPlayerAttackMontage>(FName(TEXT("Punch1")), ContextString, true);
		if (AttackMontage)
		{
			// generate  number between 1 and whatever is defined in the data table for this montage :
			int MontageSectionIndex = rand() % AttackMontage->AnimSectionCount + 1;

			// create a montage section
			FString MontageSection = "start_" + FString::FromInt(MontageSectionIndex);

			PlayAnimMontage(AttackMontage->Montage, 1.f, FName(*MontageSection));
		}
	}
}